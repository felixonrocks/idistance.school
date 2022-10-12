<?php

namespace application\lib;
//папка либ для дополнительных классов


//пишем что используем предопределенный  класс PDO
use PDO;


//класс подсоединения с бд. этот класс вызывается в контроллере mainController.php
class Db{

    protected $db;

    //функция создания соединения с бд
    public function __construct(){
        //подключаем файл с паролем и именем БД
        $config =require 'application/config/db.php';
        //echo DBNAME, DBUSER, DBPASSWORD, DBHOST;
        //echo 'i am class Db';
        //создаем переменную подключения к бд с паролями и логинами из config/db.php
        $this->db = new PDO('mysql:host='.$config['dbhost'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpassword']);
    }

    //функция запроса в бд (c защитой от sql иньекции)

    public function query($sql, $params =[]){
        $stmt = $this->db->prepare($sql);
        if(!empty($params)){
            foreach($params as $key => $val){
                $stmt->bindValue(':'.$key, $val);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params =[]){
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function column($sql, $params =[]){
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

    //public function insert

}


//foreach()

?>

