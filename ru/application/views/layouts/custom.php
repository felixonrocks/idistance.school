

<?php

//шаблон для mainView.php

//include __DIR__.'/app/./Modeldbcon.php';
//include __DIR__.'/app/./Menuview.php';
//include __DIR__.'/app/./Menumodel.php';
//include __DIR__.'/app/./db.php';

spl_autoload_register(function($class){
  include __DIR__.'/'.$class.'.php';
});

// $model = new Menumodel();
// $view = new Menuview();
?>



<!DOCTYPE html>
<!-- saved from url=(0053)https://tarasov.pro/html/html/introduction/break.html -->
<html lang="en" class="h-100">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
       
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="root/public/styles/sticky-footer.css" rel="stylesheet">
    <link href="root/public/styles/style.css" rel="stylesheet">
    <link href="root/public/styles/bootstrapstyle.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" >
       
         

  <style>
  {
  font-family: sans-serif;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body{
  padding: 20px;
  background:lightyellow;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.modules, .themes{
  color: #369;
  text-decoration: none;    
  display: block;
  padding: 3px
}
.modules:hover, .themes:hover{
  color: #69e;
}
.themes{
  padding-left: 15px;
  font-size: .7em
}
.active{
  font-weight: bold
} 
</style>
           
          
</head>


<body class="d-flex flex-column h-100">   
      <?php 
      //а переменной $content хранится вьюшка mainView.php
        echo $content; 
      ?>
</body>

</html>