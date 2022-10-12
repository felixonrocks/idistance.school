<?php
namespace application\controllers;

//подключаем род класс с конструктором из папки core


use application\core\Controller; 
use application\models\Lesson;
use application\core\View; 

class LessonController extends Controller{


    public function lessonAction(){
        //получаем переменную урока тип 10PHistoire для вывода списка глав из бд
        //print_r($_GET);
       
       
        //echo 'this is lesson cotroller';
        $lesson = $this->model->getChapter();
        //echo '<br>'.$lesson."<br>";

        //получаем переменную урока 
        $class = $this->model->getClass();
        //echo $class;

         //получаем переменную класса тип 5P для вывода списка уроков для этого года
        $year = $this->model->getYear();
       //echo $year;


        $resultsidenav = $this->model->getsidenav($year);
        $this->view->rendersidenav($resultsidenav);




        //получаем список глав из бд по этому классу 10PHistoire
        $resultchapters = $this->model->getsidechapter($class);
        //выводим список глав в боковом меню
        $this->view->renderchapters($resultchapters, $class);
        

        //вытаскивает главный текст урока/главы из бд
        $resulttext = $this->model->getinfo($class, $lesson);
        //$this->view->renderlesson($resulttext);
        //debug($resulttext);
    
    


        //выводит заголовок
        $this->view->rendertitle(ucfirst($lesson), $resulttext);
        //$this->view->rendertext($resulttext[0]);

        //$this->view->rendertext($resulttext);

        
        //вытаскивает адреса фото из бд
        echo 'hohoh';
        $resultimg = $this->model->getimg($class, $lesson);
        debug($resultimg);
        //$this->view->rendertext($resultimg);


        //вытаскивает футер
        $this->view->renderfooter();
    }

}
?>