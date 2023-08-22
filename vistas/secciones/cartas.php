

<div id="inicio">      
 <div class="card-group">


  

 <?php foreach ($cartas as $key => $value): ?>
  <div class="card">
<!--    <img src="<?php echo $landingPage["dominio"];?>..." class="card-img-top" alt="...">-->
   
    <div class="card-body">
     <!-- <i class='fas fa-user-circle ' style='font-size:48px;color:red'></i> -->
      <h3 class="card-title text-primary text-center"><?php echo $value["titulo_card"];?></h3>
      <p class="card-text text-info text-center"><?php echo $value["descripcion_card"];?></p>
     <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>


<?php endforeach?>
 
</div>
</div>


