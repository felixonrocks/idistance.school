<?php

namespace application\models;

use application\core\Model;
use application\core\View;
use application\controllers\MainController;

class Main extends Model{

  public $class;

  //модель для страницы новостей
  public function getNews(){
    //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $result
   $result = $this->db->row('SELECT title, date, text FROM news');
   return $result;
    //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $data
    //$data = $this->db->row('SELECT menuitem FROM topmenu WHERE id = :id', $params);
    //debug($data);
  }

   //модель для навигации C1P-C12P слева (вытаскиваем из бд список уроков)
  public function getsidenav($class){
    if(!$class == 'main'){ 
      $result = $this->db->row("SELECT lesson, class FROM $class");
      return $result;
    }else{
      $result = $this->db->row("SELECT lesson, class FROM 5P");
      return $result;
    }
  }
  
  //модель для навигации C1P-C12P слева (вытаскиваем из бд список глав)
  public function getsidechapter($class){
    if($class == 'main'){}
    //$result = $this->db->row("SELECT lesson FROM $class.'_'.$class['lesson']");
    //return $result;
    //echo 'done';
}


public function gettext($class, $lesson){
  echo $class;
  echo $lesson;
 if(!$lesson == NULL){
     //echo $class;
    //$lesson;
      $result = $this->db->row("SELECT text FROM $class WHERE lesson = '$lesson' ");
      if($result == NULL){ 
          //$result = $this->db->row("SELECT text FROM $class WHERE lesson='Francais'");
      }elseif(!$result == NULL){ 
          return $result[0];} 
  elseif($class == NULL){
      return $result = 'text was not found in db column class';
  }
 }
}





}



?>