<?php 

namespace application\models;

use application\core\Model;

class Lesson extends Model{

public $lesson;

public function getYear(){
    $lesson = $_GET['url'] ;
    list($class, $chapter) = explode("_", $lesson);
    $year1 = filter_var($class, FILTER_SANITIZE_NUMBER_INT);
    if($year1>10){
        return $year1.'S'; 
    }else {
        return $year1.'P'; 
    }


    
    
}


    public function getClass(){
        $lesson = $_GET['url'] ;
        list($class, $chapter) = explode("_", $lesson);
        return $class;

    }

    public function getChapter(){

        $lesson = $_GET['url'] ;
        //echo $lesson;
        list($class, $chapter) = explode("_", $lesson);
        return $chapter;
    }

    public function getsidenav($class){
        $result = $this->db->row("SELECT lesson, class FROM $class");
        return $result;
        }


    public function getsidechapter($class){
 
       $result = $this->db->row("SELECT chapter FROM $class ");
        return $result;
    }




    public function getinfo($class, $lesson){
    $result = $this->db->row("SELECT text FROM $class WHERE chapter='$lesson'");
    return $result;    
    }

    public function getimg($class, $lesson){
 
        $result = $this->db->row("SELECT img FROM $class WHERE chapter='$lesson'");
        return $result;
     }




}

?>