
<?php 
// namespace application\views\main;

// use application\core\View;
// use application\core\Models\Main;
// use application\controllers\MainController;

// class News extends View{

//   public function rendernews($result){
        
//         echo 'hi';
//         debug($result);
//         if(!$result == NULL){ 
//             echo 'hi';
//                 //foreach($result as $value){
//                     //foreach($value as $val){
//                     //   echo  "<p>";
//                     //   print_r($result);
//                       // echo "</p>";
//                     //}
//                 //}
//                 //return $this->result;
              
            

            
//         }else{echo "<p>no news in db</p>";}
//     }
?>

    <!-- MAIN SECTION -->

    </div>
  <div class="col-sm-3 col-md-8 mt-3 maincontainer">
      
      <div class="">
        <h2><?=$title; ?> </h2>
        <p>latest updates on this site (this is main news.php page)</p>

        <!-- переменные заданные в mainController.php из массива $vars -->
        <p><?php echo $resulttext['text']; ?></p>

        <?php
        //debug($this->result);

          //foreach($this->x as $val){
          //  debug($val);
          //} ?>
           <div class="container"></div>
           <p><?php print_r($vars); ?></p>
           <p><?php $this->rendervariable($result); print_r($news); ?></p>
           <h5 class = 'mt-5'><?//=$val['title']; ?></h5>
           <p class = 'ml-4'><?//=$val['date'];?></p>
           <p class = 'mb-4 ml-4'><?//=$val['content']; ?></p> 
          </div>
           <?php// endforeach;?>


        

          <?php 
          //foreach($news as $val): ?>
          <div class="container"></div>
          <h5 class = 'mt-5'><?//=$val['title']; ?></h5>
          <p class = 'ml-4'><?//=$val['date'];?></p>
          <p class = 'mb-4 ml-4'><?//=$val['content']; ?></p> 
          </div>
          <?php// endforeach;?>
      </div>
       
        <!-- вытаскиваем переменные из класса вьюшки $route и $path -->
        <hr>

      

      
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
   latest updates on this site
  </div>

</div>







