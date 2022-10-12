
<?php



?>


    <!-- MAIN SECTION -->

    </div>
  <div class="col-sm-3 col-md-8 mt-3 maincontainer">
      
      <div class="">
        <h2><?=$title; ?></h2>
        <p><?= $resulttext['text']; ?></p>
        <form action="./login" method="POST">
            <p>Login</p>
            <p><input type="text" value="" name="login" ></p>
            <p>Password</p>
            <p><input type="text" name="pwd" id=""></p>
            <b><input type="submit" value="login" name="enter"></input></b>
        </form>


        <!-- переменные заданные в mainController.php из массива $vars -->
        
      
       
        <!-- вытаскиваем переменные из класса вьюшки $route и $path -->
        <hr>
      

      </div>
  </div> 

</div>  
</div>


<!-- WEB TITLE -->



<div class="container">
  <div class="mt-4">
    <!-- $title переменная задана в mainController.php -->
    <h2 class=""><?=$title; ?></h2>
  </div>
  <div class="lead container">
    programme virtuelle pour vous aider
  </div>
</div>



