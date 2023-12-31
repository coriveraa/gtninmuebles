<?php
if(isset($rutas[1])){

	$articulo =  ControladorLandingPage::ctrMostrarConInnerJoin(0, 1, "ruta_articulo", $rutas[1]);
  $totalArticulos = ControladorLandingPage::ctrMostrarTotalArticulos("id_cat", $articulo[0]["id_cat"]);
  $opiniones = ControladorLandingPage::ctrMostrarOpiniones("id_art", $articulo[0]["id_articulo"]);

  $actualizarVistaArticulo = ControladorLandingPage::ctrActualizarVista($rutas[1]);

  


// echo '<pre>'; print_r($opiniones); echo '</pre>';

}


/*=============================================
Función para limitar foreach
=============================================*/
function limitarForeach($array, $limite){

	foreach ($array as $key => $value) {
		
		if(!$limite--)	break;

		yield $key => $value;
	}

}

$anuncios = ControladorLandingPage::ctrTraerAnuncios("articulos");

?>
<main role="main" class="container-fluid">
  <div class="row">
    <div class="col-md-10 blog-main">

    <div class="container">
    <header class="pb-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg> -->
        <img src="<?php echo $landingPage["dominio"].$landingPage["logo"];?>" alt=""  width="40" height="32" class="me-2">
        <span class="fs-4"><?php echo $articulo[0]["titulo_articulo"]?></span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"><?php echo $articulo[0]["titulo_articulo"]?></h1>
        <p class="col-md-8 fs-4"><?php echo $articulo[0]["descripcion_articulo"]?></p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white  rounded-3">
        <img src="<?php echo $landingPage["dominio"].$value["portada_articulo"];?>" alt=""  width="250" height="250" class="me-2">

           <!-- <h2>Change the background</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>  -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <!-- <h2>Add borders</h2> -->
          <p><?php echo $articulo[0]["prologo"]?></p>
        </div>
      </div>

      <div class="col-md-12">
        <div class="h-100 p-5 bg-light border rounded-3">
          <p><?php echo $articulo[0]["contenido_articulo"]?></p>
          <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
        </div>
      </div>
    </div>
    
		<!-- AVANZAR - RETROCEDER -->
<div>

          <?php 

        foreach ($totalArticulos as $key => $value) {


        if($articulo[0]["id_articulo"] == $value["id_articulo"]){

          $posicion = $key;

        }
        }

        ?>

        <div class="d-md-flex justify-content-between my-3 d-none">

        <?php if (($posicion-1) > 0): ?>

        <a href="<?php echo $landingPage["dominio"].$articulos[0]["ruta_categoria"]."/".$totalArticulos[($posicion-1)]["ruta_articulo"] ?>">Leer artículo anterior</a>

        <?php endif ?>

        <?php if (($posicion+1) < count($totalArticulos)): ?> 

        <a href="<?php echo $landingPage["dominio"].$articulos[0]["ruta_categoria"]."/".$totalArticulos[($posicion+1)]["ruta_articulo"] ?>">Leer artículo siguiente</a>

        <?php endif ?>
</div>

</div>


<?php

include "opiniones.php";
include "formulario_opiniones.php";

?>




    </div>
</div>





<aside class="col-md-2 blog-sidebar">
<div class="my-4">
					
					<h4>Artículos Recientes</h4>

					<?php foreach (limitarForeach($totalArticulos, 3) as $key => $value): ?>

						<div class="d-flex my-3">
						
							<div class="w-100 w-xl-50 pr-3 pt-2">
								
								<a href="<?php echo $landingPage["dominio"].$articulos[0]["ruta_categoria"]."/".$value["ruta_articulo"]; ?>">

									<img src="<?php echo $landingPage["dominio"].$value["portada_articulo"];?>" alt="<?php echo $value["titulo_articulo"]; ?>" class="img-fluid">

								</a>

							</div>

							<div>

								<a href="<?php echo $landingPage["dominio"].$articulos[0]["ruta_categoria"]."/".$value["ruta_articulo"] ?>" class="text-secondary">

									<p class="small"><?php echo substr($value["descripcion_articulo"], 0, -150)."..."; ?></p>

								</a>

							</div>

						</div>
						
					<?php endforeach ?>

				</div>

        	<!-- PUBLICIDAD -->

				
				<?php foreach ($anuncios as $key => $value): ?>

<?php echo $value["codigo_anuncio"]; ?>  

<?php endforeach ?>



        </aside> 

     

    <!-- <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2021
    </footer> -->
  </div>

  </main>