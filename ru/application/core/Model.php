<?php

namespace application\core;

//подключаем класс для работы с бд
use application\lib\Db;

abstract class Model{

    public $db;

    public function __construct(){
        //echo '<br>model constructed';
         //создаем новый обьект класса Db (создается подключение к бд в конструкторе)
        $this->db = new Db;
        //$this->model = $model;
        //$this->controller = $controller;
    }

    //модель из бд для верхней навигации
    public function getTopmenu(){
        //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $result
        $resultmenu = $this->db->row('SELECT action, menuitem FROM topmenu');
        return $resultmenu;
        //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $data
        //$data = $this->db->row('SELECT menuitem FROM topmenu WHERE id = :id', $params);
        //debug($data);
    }

    //модель из бд для верхней навигации классов
    public function getTopnavmenu(){
        //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $result
        $result = $this->db->row('SELECT class FROM topnavmenu');
        return $result;
        //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $data
        //$data = $this->db->row('SELECT menuitem FROM topmenu WHERE id = :id', $params);
        //debug($data);
    }
        
   //модель для навигации C1P-C12P слева (вытаскиваем из бд список уроков)
   public function getsidenav($class){
    $result = $this->db->row("SELECT lesson, class FROM $class");
    return $result;
    }

    //модель для навигации C1P-C12P слева (вытаскиваем из бд список глав)     
    public function getchapters($lesson){
        //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $result
        if(str_contains($lesson, 'P') || str_contains($lesson, 'S')){ 
        $result = $this->db->row("SELECT chapter FROM $lesson");
        return $result;
        }else{ $result = NULL;}
        //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $data
        //$data = $this->db->row('SELECT menuitem FROM topmenu WHERE id = :id', $params);
        //debug($data);
    }

    public function gettext($class, $lesson){
        //echo $class;
        //echo $lesson;
       if(!$lesson == NULL){
           //echo $class;
          //$lesson;
            $result = $this->db->row("SELECT text FROM $lesson WHERE class='$class' ");
            if($result == NULL){ 
                //$result = $this->db->row("SELECT text FROM $class WHERE lesson='Francais'");
            }elseif(!$result == NULL){ 
                return $result;} 
        elseif($class == NULL){
            return $result = 'text was not found in db column class';
        }
       }
    }

    public function getNews(){
        //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $result
       $result = $this->db->row('SELECT title, date, content FROM news');
       return $result;
    }



    public function getimg($class, $lesson){
        //echo $class;
        //echo $lesson;
       if(!$lesson == NULL){
           //echo $class;
          //$lesson;
            $result = $this->db->row("SELECT text FROM $lesson WHERE class='$class' ");
            if($result == NULL){ 
                //$result = $this->db->row("SELECT text FROM $class WHERE lesson='Francais'");
            }elseif(!$result == NULL){ 
                return $result;} 
        elseif($class == NULL){
            return $result = 'img was not found in db column class';
        }
       }
    }

}

?>