<?php
//подключаем файл dev.php с функцией debug
//require_once 'application/lib/dev.php';

require_once '/home/u901121957/domains/idistance.school/public_html/application/lib/dev.php';
//require_once//'/application/lib/dev.php';
include __DIR__.'/application/lib/empty.php';

define('SITE_ROOT', __DIR__);

use application\core\Router;
use application\lib\Db;

//автозагрузка адреса классов из namespace $path
spl_autoload_register(function($class){
  $path = str_replace('\\', '/', $class.'.php');
  if (file_exists($path)){ 
      require $path;
  }
});

//cессия для куки
session_start();




//создание маршрута (перебор через foreach массива routes.php в config)
$router = new Router();
$router->run();
echo '<br>';
$db = new Db;

echo '<br>';
print_r($_SERVER['REQUEST_URI']);

?>

