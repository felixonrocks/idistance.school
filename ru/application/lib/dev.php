<?php
//устанавливаем вывод ошибок на настоящем сервере
ini_set('display_errors', 1);
error_reporting(E_ALL);

//функция распечатки переменных
function debug($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
}
?>