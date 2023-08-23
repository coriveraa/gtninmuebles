<footer>
<input type="hidden" id="rutaActual" value="<?php echo $landingPage["dominio"];?>">
<div class="row">
      <div class="col-12 col-md">
        <!-- <img class="mb-2" src="vistas/img/sartech_logo.png" alt="" width="24" height="24"> -->
        <!-- <small class="d-block mb-3 text-muted">Sartech. 2017-2023</small> -->
      </div>
      <div class="col-6 col-md">
        <h5>Redes Sociales</h5>
        <ul class="list-unstyled text-small">
        <?php
    
    $redesSociales = json_decode($landingPage["redes_sociales"], true);


    foreach ($redesSociales as $key => $value){

         echo'
               <li class="ftco-animate"><a href="'.$value["url"].'"><span class="'.$value["icono"].'"></span></a>'.$value["red"].'</li>';
          }
   ?>
         
        </ul>
      </div>
      <div class="col-6 col-md">
        <!-- <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul> -->
      </div>
      <div class="col-6 col-md">
        <h5><?php echo $landingPage["titulo"] ?></h5>
        <!-- <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul> -->
      </div>
    </div>
  </footer>
</div>




    <!-- <p class="float-right"><a href="index.php?pagina=inicio">Inicio</a></p>  -->

     
