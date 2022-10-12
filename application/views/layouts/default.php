

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

<html lang="en" class="h-100">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $title; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://swisstechglobal.com/public_html/public/styles/style.css">
 -->


<!--  
<style>

  body{
      padding:0
  }

  li{
      list-style-type: none;
      padding-right: 15px;
      text-decoration: none;
  }



  .btn{
      border-radius: 7px;
      border: 1px solid #17a2b8;
      color: #17a2b8;
      background-color: white;
      padding: 5px;
      width: 70px;
      padding: 5px;
  }

  h2{color: #17a2b8;}

  input{
      border-radius: 7px;
      border: 1px solid #17a2b8;
      padding: 5px;
      color: #17a2b8;
  }

  .TM{
      width: 100%;
      padding:0;
      margin: 0
  }

  .FI{
      width: 400px;
      display:inline;

  }

  .form-inline{
      max-height: 40px;
      display:flex;
      flex-flow: row wrap;
      align-items: center;
  }

  .form-control, .btn{
      margin: 0;
      padding: .375rem .75rem;
      font-size: 1rem;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: .25rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

  .btn{
      color: #17a2b8;
    background-color: transparent;
    background-image: none;
    border-color: #28a745;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid #17a2b8;
    padding: .375rem .75rem;
    margin-left: 7px;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }

  .modules, .themes{
    color: #369;
    text-decoration: none;
    text-decoration-line: none;
    text-decoration-thickness: initial;
    text-decoration-style: initial;
    text-decoration-color: initial;    
    display: block;
    padding: 3px;
  }

  .maincontainer{
    max-width: 80%;

  }

  .sidecontainer{
    padding-top: 40px;
    padding-left:-40px;
 
  }

  .SM{
    padding:0;
  }

  ul{
    margin-top: 0px;
    padding-top: 0;
  }

  .container-xxl{
      margin:0
  }
    
  .tm1{
    padding:0;
    margin:0;
  }  

  a{
    text-decoration:none;
    text-decoration-line: none;
    text-decoration-thickness: initial;
    text-decoration-style: initial;
    text-decoration-color: initial;
    color: #369;
  } 

  a:active {
      color: none;
  }
  a:hover{
    color: #007bff;
  }


  /* SMALL DEVICES */
  @media only screen and (max-width: 667px){
    .maincontainer{
      max-width:870px;
      /* margin-top:500px; */
      /* padding-top: 400px; */
      }  
    .topcontainer, .MTC {
      min-height: 60px;
      margin-top:0px;
      padding-top:0;
      max-height:150px;
    }
    .sidecontainer: {
      /* min-width: 700px; */
      padding-left: 0
    }
  
    .body, .container, .row{
      font-size: 19px;
    }
    .MCC{
      /* padding-top: 200px; */
      padding-left:60px;
    }
  
   
    .TM, .TM1{
      max-height: 50px;
      max-width: 375px;
      margin-top: 0;
      justify-content:center;
    }

    .nav-link{
      margin-top:-5px;
    }

    .FI{
     
    }
    .form-inline{
      justify-content:center;
    }
    h2{
      font-size: 30px;
    }
    .footer{
      max-height: 30px!important;
    
     
    }
    .F{
      padding-top:10px;
    }

    li{
      padding-top: 3px;
      padding-bottom:3px;
    }
  }
  


  /* MEDIUM DEVICES */
  @media only screen and (max-width: 991px){

    .maincontainer{
      max-width:370px;
      /* padding-top: 600px; */
      /* margin-top:500px; */
    } 
    
    
    .topcontainer, .MTC{
      /* min-height: 210px; */
      margin-top:0;
      padding-top:0;

    }

    .TM{
      min-height:60px;
    }

    .sidecontainer: {
      /* min-width: 200px; */
  
    }
    .body, .container, .row{
      margin:0;
      padding:0;
    }
    .MCC{
      /* padding-top: 200px; */
    }
  
    .form-control{
      width: 160px;
      padding-right: 10px;
    }
    .F{
      padding-top:17px;
      font-size: 17px;
    }
  }


</style>
            -->
          
</head>


<body class=" ">   

      


      <?php 
      //в переменной $content хранится вьюшка mainView.php
        echo $content; 
      ?>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   


</body>

</html>


