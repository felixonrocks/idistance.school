<?php



namespace application\core;


//require_once '.../config.php';

class View{
    public $path;
    public $route;
    //переменная шаблона (по умолчанию 'default'), включает шапки и стили
    public $layout = 'default';
    //public $result=[];
    //public $resulttext = 'our main text';
    public function __construct($route){
        $this->route = $route;
        //переменная для маршрута
        $this->path = $route['controller'].'/'.$route['action'];
    }


    //функция загрузки шаблона стилей default.php
    //$vars =[] массив переменных для разных видов из mainController.php, необязательный параметр
    public function render($title, $vars =[]){
        extract($vars);
        //переменная путь к файлу
        $path = 'application/views/'.$this->path.'.php';
        if(file_exists($path)){
            //копируем вьюшку в буфер
            
            ob_start();
            //подключаем этот файл из пути
            require $path;
            //присваиваем вьюшку в переменную $content которая отобразится в body стартовой стр
            
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
            //header("location: app/view/layouts/$model");
        }else {
            echo 'view not in the list of files '.$this->path;
        }
    }

    //функция загрузки верхнего меню общего для всех страниц
    public function rendertopmenu($result){
        //echo '<pre>';
        //print_r($result);
        echo $tag1 = "
        <div class='container TM'>
        <div class='row TM'>

      

        <ul class='navbar topcontainer navbar-light bg-light TM'>
        <li class='nav-item list-unstyled topnavitem'><a class='navbar-brand' href='/'><img src='public/images/logo1.png' alt='' width='50' height='34'></a></li>
        ";
        foreach($result as $item){
            
            echo "<li class='nav-item list-unstyled topnavitem '><a href='/".$item['action']."' class='nav-link'>".$item['menuitem']."</a></li>";
            
        }
            echo "
            <li class='nav-item list-unstyled topnavitem FI '>
            <form class='form-inline my-2 my-lg-0'>
            <input class='form-control mr-sm-2 ml-5 pl-5' type='search' placeholder='Search' aria-label='Search'>
            <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
            </form>
            </li>
            </ul></div>";
            //<ul class='topnav navbar nav navbar-nav mr-auto'>
        
    }

    //вьюшка для верхнего меню классов (с 1 по 12)
    public function rendertopnavmenu($resultclass){
        echo $tag1 = "
        <ul class='navbar topcontainer navbar-light pl-0 pr-0 TM1'><div class='container pl-0 pr-0'>
        <div class='row ml-1 pl-0' >
        <nav class='navbar topcontainer navbar-light bd-subnavbar container-xxl'>
        <ul class='topnav navbar nav container-xxl pl-0'>
        ";
        foreach($resultclass as $item){
            echo "<li class='nav-item list-unstyled'><a href='".$item['class']."' class='nav-link'>".$item['class']."</a></li>";
        }
            echo "
            </ul>
            </nav>
        </div>";
   
    }

    //вьюшка для левого меню
    public function rendersidenav($resultsidenav){
    
        echo $tag1 = "
        <div class='container pl-0 pr-0'>
        <div class='row '>
        <div class='col-sm-2 col-md-2 sidecontainer pl-0 pr-0'>
        <nav class='navbar nav mt-2 pl-5 SM'>
        <ul class='nav-item list-unstyled SM'>    
        ";
        foreach($resultsidenav as $item){
            echo "<li class='mb-1 list-unstyled'><a href='".$item['class'].$item['lesson']."' class='modules'>".$item['lesson']."</a></li>";

        }
        echo "
            </ul>
            </nav>
        ";
    }

    //вьюшка для подсекции глав уроков левого меню
    public function renderchapters($resultchapters, $lesson){
        if(!is_null($resultchapters)){ 
            echo $tag1 = "
            <ul class='nav-item list-unstyled ml-5 myDiv'>    
            ";
            foreach($resultchapters as $item){
                echo "<li class='list-unstyled";
               // echo ($_SERVER['PHP_SELF'] == "/public_html/11S#" ? "active" : "");
                echo " '><a href='".$lesson.'_'.$item['chapter']."' class='themes '>".$item['chapter']."</a></li>";   
            }
            echo "
                </ul>
                </div>
                ";
        }
    }




    //код для вывода урока по центру от левого меню
    public function rendercentersection(){
        echo "
        
        <div class='container'>
        <div class='row '>
        <div class='col-sm-3 col-md-4 sidecontainer'>
        </div>
        <div class='col-sm-3 col-md-9 mt-3 maincontainer;>
        <div class=''>
        ";
    }

    //выводит название секции/урока/главы напрямую в файл view/main/books.php
    //!!!!НЕ МОДИФИЦИРОВАТЬ
    public function rendertitle($title, $resulttext){
        //переменная путь к файлу
        $path = 'application/views/'.$this->path.'.php';
        
        if(file_exists($path)){
            //копируем вьюшку в буфер
            ob_start();
            //подключаем этот файл из пути
            require $path;
            //присваиваем вьюшку в переменную $content которая отобразится в body стартовой стр
            $content = ob_get_clean();
            
            require SITE_ROOT."/application/views/layouts/$this->layout.php";
            //header("location: app/view/layouts/$model");
        }else {
            //создаем новую несуществующую вьюшку урока тип 7PGeographie
            require 'application/views/lesson/lesson.php';
           
            $view = $this->route['action'];
            $this->loadView($view);
            //echo "view created $view";
            //ob_start();
            $content = '';
            require 'application/views/layouts/default.php';
            //$text = $resulttext[0];
            //echo $text['text'];
            //debug($resulttext);
            //$content = ob_get_clean();
            
   
        }
    }
    //используется для отрбражения main text (не модифицировать!!)
    public function rendertext($resulttext){
        if(!$resulttext == NULL){ 
            return $resulttext['text'];
                //foreach($resulttext as $value){
                //   foreach($value as $val){
                 //       return "<p>$val</p>";
                //}
                //}
        }else{return "<p>our main section is empty in db</p>";}
    }
    //не модифицировать!! 
    public function renderlesson($resulttext){
        if(!$resulttext == NULL){ 
            return '<p>'.$resulttext[0]['text'].'</p>';
               // foreach($resulttext as $value){
                //   foreach($value as $val){
                //        return "<p>$val</p>";
                //    }
                
              
        }else{
            return "<p>lesson section is empty in db</p>";
        }
    }

    //не модифицировать, используется для отображения новостей
    public function rendervariable($result){
        $news = $result;
        foreach($result as $val){ 
           
            echo '<p>'.$val['text'].$val['date'].$val['title'].'</p>';
        }
        return $news;
    } 




    //вьюшка для футера
    public function renderfooter(){
        echo "
        <footer class='container bg-light topcontainer footer'>
        <div class='row py-3 F'>
        <span class='text-muted col'>© 2020 ischool.edu</span>
        </div>
        </footer>
        ";
    }

    //функция отображения страниц 403 404
    //статическая чтобы к ней обращаться без создания экземпляра класса
    public static function rendererror($code){
        http_response_code($code);
        //$path - переменная страницы которая не найдена (если файл найден то его подключить)
        $path = 'application/views/errors/'.$code.'.php';
        if(file_exists($path)){
            //подключаем файлик
            require $path;
        }
        exit;
    }


    //функция редиректа
    public function redirect($url){
        header('location: '.$url);
        exit;
    }
    //функция плавающего сообщения
    public function message($status, $message){
        echo $status, $message;
    }

    //функция создающая несуществующую вьющку урока ($v переменная типа 12SGeographie)
    public function loadView($v){
        return "public function $v(){
            require 'application/views/layouts/default.php';
            echo 'this is automatically generated view';
        };";
      
    }


}

?>