<html>
    <h4>version 2 news view</h4>

        <!-- MAIN SECTION -->

        </div>
  <div class="col-sm-3 col-md-8 mt-3 maincontainer">
      
      <div class="">
        <h2><?=$title; ?> </h2>
        <p>latest updates on this site</p>

        <!-- переменные заданные в mainController.php из массива $vars -->
        <p><?php echo $resulttext['text']; ?></p>
        <?php
        debug($result);

          //foreach($this->result as $val){
          //  debug($val);
          //} ?>
           <div class="container"></div>
           <h5 class = 'mt-5'>"<?=$val['title']; ?>"</h5>
           <p class = 'ml-4'><?=$val['date'];?></p>
           <p class = 'mb-4 ml-4'><?=$val['content']; ?></p> 
          </div>
           <?php// endforeach;?>




          <?php
          foreach($news as $val): ?>
          <div class="container"></div>
          <h5 class = 'mt-5'>"<?=$val['title']; ?>"</h5>
          <p class = 'ml-4'><?=$val['date'];?></p>
          <p class = 'mb-4 ml-4'><?=$val['content']; ?></p> 
          </div>
          <?php endforeach;?>
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

