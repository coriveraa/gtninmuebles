  	<!-- BLOQUE DE OPINIONES -->

      <h3 style="color:#8e4876">Opiniones</h3>

<hr style="border: 1px solid #79FF39">

<div class="row opiniones">

<?php if (count($opiniones) != 0): ?>

  <?php foreach ($opiniones as $key => $value): ?>

      <?php if ($value["aprobacion_opinion"] == 1): ?>
      
          <div class="col-3 col-sm-4 col-lg-2 p-2">
      
              <img src="<?php echo $landingPage["dominio"].$value["foto_opinion"];?>" class="img-thumbnail">	

          </div>

          <div class="col-9 col-sm-8 col-lg-10 p-2 text-muted">
              
              <p><?php echo $value["contenido_opinion"]; ?></p>

              <?php 

              $formatoFecha = strtotime($value["fecha_opinion"]);
              $formatoFecha = date( 'd.m.Y', $formatoFecha);

               ?>

              <span class="small float-right"><?php echo $value["nombre_opinion"]; ?> | <?php echo $formatoFecha; ?></span>

          </div>	

          <?php if ($value["respuesta_opinion"] != null): ?>

              <div class="col-9 col-sm-8 col-lg-10 p-2 text-muted">
                  
                  <p><?php echo $value["respuesta_opinion"]; ?></p>

                  <?php 

                  $formatoFechaR = strtotime($value["fecha_respuesta"]);
                  $formatoFechaR = date( 'd.m.Y', $formatoFechaR);

                   ?>

                  <span class="small float-right"><?php echo $value["nombre_admin"]; ?> | <?php echo $formatoFechaR; ?></span>

              </div>

              <div class="col-3 col-sm-4 col-lg-2 p-2">
              
                  <img src="<?php echo $blog["dominio"].$value["foto_admin"];?>" class="img-thumbnail">	

              </div>
                                          
          <?php endif ?>

      <?php endif ?>

  <?php endforeach ?>

<?php else: ?>	

  <p class="pl-3 text-secondary">¡Este artículo no tiene opiniones!</p>
  
<?php endif ?>

</div>

<hr style="border: 1px solid #79FF39">