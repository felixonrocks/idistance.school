<?php

namespace application\core;

use application\core\View;
use application\core\Model;

//родительский класс для последующих контроллеров
abstract class Controller{

    public $route;
    //переменная для передачи пути во вьюшку
    public $view;

    public $class;

    public function __construct($route){ 
        $this->route = $route;
        //создаем вьюшку в зависимости от маршрута
        $this->view = new View($route);
        //  $this->before();
        //выводим верхнее навиг меню 
        
        $this->model = $this->loadmodel($route['controller']);
        
        //подтягиваем модель для торнавигации из бд и вызываем вьюшку топ навигации
        $result = $this->model->getTopmenu();
        $this->view->rendertopmenu($result);
        
        $resultclass = $this->model->getTopnavmenu();
        $this->view->rendertopnavmenu($resultclass);
      
       
        //print_r($resultclass);




        //вытаскивает боковое меню
        if ($route['controller'] == 'main'){ 
            $class = 'main';
            }
        else {
            $class = substr($route['controller'], 1);
        }
        
        if (str_contains($route['action'], 'P') || str_contains($route['action'], 'S')){
            $lesson = substr($route['action'], 1);
            $_GET['class']= $route['action'];
        
            
        }else{
            if($route['action']=='lesson'){
                return;
            }else{ 
                $lesson = $route['action'];
                
            }
        }




        
        $resultsidenav=$this->model->getsidenav($class);
        //на случай гиперссылки на главу урока
        if($resultsidenav == NULL){
            echo ""; 
        }else{ 
            $this->view->rendersidenav($resultsidenav);
        }
        //вытаскиваем главы урока из бокового меню
        $resultchapters = $this->model->getchapters($lesson);
        $this->view->renderchapters($resultchapters, $lesson);


    
           //выводит заголовок
        if (!$class == NULL){
            $resulttext = $this->model->gettext($class, $lesson);
            //debug( $resulttext);
            $this->view->rendertitle(ucfirst($lesson), $resulttext);
        }
    

  
        //вытаскивает футер
        
        
        $this->view->renderfooter();

        

    }

    public function loadModel($name){
        $path = 'application\models\\'.ucfirst($name);
        //проверяем наличие этого класса
        if(class_exists($path)){
            return new $path;
        }else{echo 'model does not exist';}

    }

    //создает новую функцию экшна урока если ее не существует в контроллере типа 'C5PController'
    //чтобы урок вывался экшн должнен быть прописан в routes.php
    public function loadAction($a){
        return "public function $a(){};";
    }

    public function loadnews($result){
        $this->view->rendervariable($result);
    }





}

?>