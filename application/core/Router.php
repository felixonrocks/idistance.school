<?php

namespace application\core;

use application\core\View;
use application\core\Controller;



//класс для определения контроллера и экшн из адресной строки
class Router{
    //в $routes хранится массив из routes.php
protected $routes = [];
// в  $params хранятся ключи от массива  $routes
protected $params = [];

//класс для загрузки конфигов $arr это массив с маршрутами
public function __construct(){
    $arr = require 'application/config/routes.php';
    foreach($arr as $key => $val){
        $this->add($key, $val);
    }
}

//функция добавлния маршрута из construct в форме регулярных выражений #ˆ чччч $#
public function add($route, $params){
    $route = '#'.$route.'$#';
    $this->routes[$route] = $params;

}

//функция сопоставки/проверки маршрута (есть ли такой маршрут).  $url это текущая страница
//$matches - хранится что именно было найдено
//$params хранит вторую часть массива с клнтроллер и action
public function match(){
    $url = str_replace('/idistance.school/public_html//', '', $_SERVER['REQUEST_URI']);//ok
    
    $url = str_replace('/', '', $url);
    //echo $url; echo ' - is url for a moment';//ok
    $_GET['url']= $url ;
    foreach ($this->routes as $route => $params){
        if (preg_match($route, $url, $matches)){
            $this->params = $params;

            //echo '<br>params here is: ';
            //print_r($params);
            //echo '<br> matches is: ';
            //print_r($matches);
            //echo '<hr>';
            return true;  
        } 
    } return false;  
}

//функция запуска рутера (маршрутов)
public function run(){
    if($this->match()){
    $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
   //echo $path;
    //проверка cуществует ли такой класс под именем $controller
        if(class_exists($path)){
            //echo 'yes';
            $action = $this->params['action'].'Action';
            //echo $action;
            //проверка на существование метода $action
            if(method_exists($path, $action)){
                //echo $action;
               $controller = new $path($this->params);
               $controller->$action();
            }else{
                //echo 'ok';
                $controller = new $path($this->params);
                $controller->loadAction($action);
            }

        } else{echo 'controller not found: '.$path;}
    } else {
        
        if(str_replace('/idistance.school/', '', $_SERVER['REQUEST_URI'])=='/'){
        
            $controller= new \application\controllers\MainController($this->params);
            $action='indexAction';
            $controller->$action();
        }else
        {view::rendererror(404);}
    }
}

}


?>