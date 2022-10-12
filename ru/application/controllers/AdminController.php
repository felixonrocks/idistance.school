<?php

namespace application\controllers;

//подключаем родительский класс с конструктором из папки core
use application\core\Controller;
//подключаем класс db для соед-ия с бд


class AdminController extends Controller{

    //выводит главную страницу
    public function indexAction(){
        //вытаскиваем модель из контроллера
        $result = $this->model->getNews();


        //переменные которые мы будем передавать во вьюшку
        $vars = [
            'news' => $result,
        ];
        $form = '2';
        $params = [
            'id' => $form,
        ];

        //задаем значение переменной $title='main page'
       $this->view->render('main page', $vars);


    }

 
}
    
?>