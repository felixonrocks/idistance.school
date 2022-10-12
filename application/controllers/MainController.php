<?php

namespace application\controllers;

include 'application/core/Controller.php';
//подключаем родительский класс с конструктором из папки core
use application\core\Controller;
use application\models\Main;
use application\core\View;
//подключаем класс db для соед-ия с бд


class MainController extends Controller{

    //меняем дизайн регистрационной страницы
    public function before(){
        $this->view->layout = 'custom';
    }



    //выводит главную страницу
    public function indexAction(){
        $result = $this->model->gettext('main', 'index');
        //print_r($result);
        //$content1 = $result['text'];
        //$this->view->loadView($content1);
        $resultnews = $this->model->getNews();
        //debug($resultnews);
        //$this->view->rendervariable($resultnews);
    }



    //выводит страницу новостей
    public function newsAction(){
        //вытаскиваем модель из контроллера
        $result = $this->model->getNews();
        //распечатывает под футером
        $news = $this->view->rendervariable($result);
        //print_r($result);
        //return $result;
        //$this->view->rendervariable($result) ;
        //debug($result);
        //переменные которые мы будем передавать во вьюшку
        $vars = ['news' => $news];
        debug($vars);
        //$form = '2';
        //$params = ['id' => $form];
       // $this->view->rendernews($result);
        //echo 'rendered';
      
    }
    

    //выводит страницу Books
    public function booksAction(){
        $resulttext = $this->model->gettext('main', 'books');
        //return $a = $resulttext['text'];
        //return $result = $this->view->rendertext($resulttext);
    }


   //выводит страницу Downloads
    public function downloadAction(){
        $resulttext = $this->model->gettext('main', 'download');
        //$content1 = $result['text'];
    }


    //выводит страницу Contacts
    public function contactAction(){
        $result = $this->model->gettext('main', 'contact');
        //$content1 = $result['text'];
    }


    //выводит страницу About
    public function aboutAction(){
        $result = $this->model->gettext('main', 'about');
        //$content1 = $result['text'];
    }

    //выводит страницу логин
    public function loginAction(){
        //выводим разметку разделения страницы на 3 колонки
       $this->view->rendercentersection();
       $result = $this->model->gettext('main', 'login');
        //цикл функции логин
        if(!empty($_POST)){
                require 'application/config/db.php'; 
                if($_POST['login'] == STADMIN && $_POST['pwd'] == STPASS){
                    $this->view->message('<br>logged-in', 'sucessfully');
                    //!редирект на админ панель
                    $this->view->layout = 'admin';
                    //$this->view->redirect('./main/admin'); 
                }else{
                    $this->view->message('<br>login or password not correct', 'текст ошибки');
                }
                //вызов функции редиректа
                //$this->view->redirect('./main');
                //$this->view->redirect('https://google.com');
            } else {
                $this->view->message('<br>enter login or password', 'текст ошибки');
            } 
    }

    //выводит страницу Register (еще не прописали в верхнем меню в бд)
    public function registerAction(){
        $result = $this->model->gettext('main', 'register');
        //$this->view->path = 'test/test';
        //свойства layout и path из класса view.php во вьюшках
        //кастомный шаблон css для registration page
        $this->view->layout = 'custom';
        $this->view->render('<br>please Register <hr>');
       
    }



    




}
    
?>