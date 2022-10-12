<?php
namespace application\controllers;


class Controller{
    public $model;
    
    public function __construct(){
        $this->controller=$controller;
    }

    public function choose(){
        if (isset($_SESSION['id'])){
            return $content = 'adminpanel.php';
        }else {
            return $content = 'default.php';
        }
    }
}


?>