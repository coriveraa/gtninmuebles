

<?php
 
 /*=============================================
Seleccionar los artículos de la categoría especifica
=============================================*/

if(isset($rutas[0])){

	$articulos = ControladorLandingPage::ctrMostrarConInnerJoin(0, 3, "ruta_categoria", $rutas[0]);

	$totalArticulos = ControladorLandingPage::ctrMostrarTotalArticulos("id_cat", $articulos[0]["id_cat"]);

	$totalPaginas = ceil(count($totalArticulos)/3);

	$articulosDestacados = ControladorLandingPage::ctrArticulosDestacados("id_cat", $articulos[0]["id_cat"]);

// echo '<pre>'; print_r($articulosDestacados); echo '</pre>';


}

/*=============================================
Revisar si viene paginación de categorías
=============================================*/

if(isset($rutas[1])){

	if(is_numeric($rutas[1])){

		if($rutas[1] > $totalPaginas){

			echo '<script>

				window.location = "'.$blog["dominio"].'error404";

			</script>';

			return;

		}

		$paginaActual = $rutas[1];

		$desde = ($rutas[1] - 1)*3;
		$cantidad = 3;

		$articulos = ControladorLandingPage::ctrMostrarConInnerJoin($desde, $cantidad, "ruta_categoria", $rutas[0]);

	}else{

		echo '<script>

			window.location = "'.$landingPage["dominio"].'error404";

		</script>';

		return;
	}


}else{

	$paginaActual = 1;

}

// $anuncios = ControladorLandingPage::ctrTraerAnuncios("categorias");


 ?>
?>
  
    
<div class="container">
  <header class="blog-header py-3">
    <!-- <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div> -->
  </header>

  
  <div class="nav-scroller py-1 mb-2">


    <nav class="nav d-flex justify-content-between">

    <!-- <a class="p-2 text-muted" href="#">World</a> -->

    <?php foreach ($categorias as $key => $value): ?>

                  <a class="p-2 text-muted" href="<?php echo $value ["ruta_categoria"]; ?>"><?php echo $value ["titulo_categoria"]?></a>

    <?php endforeach?>
    


     
    </nav>
  </div>


</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Articulos
      </h3>

      <!-- <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
        <p>Yeah, she dances to her own beat. Oh, no. You could've been the greatest. 'Cause, baby, <a href="#">you're a firework</a>. Maybe a reason why all the doors are closed. Open up your heart and just let it begin. So très chic, yeah, she's a classic.</p>
        <blockquote>
          <p>Bikinis, zucchinis, Martinis, no weenies. I know there will be sacrifice but that's the price. <strong>This is how we do it</strong>. I'm not sticking around to watch you go down. You think you're so rock and roll, but you're really just a joke. I know one spark will shock the world, yeah yeah. Can't replace you with a million rings.</p>
        </blockquote>
        <p>Trying to connect the dots, don't know what to tell my boss. Before you met me I was alright but things were kinda heavy. You just gotta ignite the light and let it shine. Glitter all over the room <em>pink flamingos</em> in the pool. </p>
        <h2>Heading</h2>
        <p>Suiting up for my crowning battle. If you only knew what the future holds. Bring the beat back. Peach-pink lips, yeah, everybody stares.</p>
        <h3>Sub-heading</h3>
        <p>You give a hundred reasons why, and you say you're really gonna try. Straight stuntin' yeah we do it like that. Calling out my name. ‘Cause I, I’m capable of anything.</p>
        <pre><code>Example code block</code></pre>
        <p>Before you met me I was alright but things were kinda heavy. You just gotta ignite the light and let it shine.</p>
        <h3>Sub-heading</h3>
        <p>You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out.</p>
        <ul>
          <li>Got a motel and built a fort out of sheets.</li>
          <li>Your kiss is cosmic, every move is magic.</li>
          <li>Suiting up for my crowning battle.</li>
        </ul>
        <p>Takes you miles high, so high, 'cause she’s got that one international smile.</p>
        <ol>
          <li>Scared to rock the boat and make a mess.</li>
          <li>I could have rewrite your addiction.</li>
          <li>I know you get me so I let my walls come down.</li>
        </ol>
        <p>After a hurricane comes a rainbow.</p>
      </div> -->
 
       <?php foreach ($articulos as $key => $value): ?>  

        <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $value ["titulo_articulo"]?></h2>
        <p class="blog-post-meta"><?php echo $value["fecha_articulo"]?> <a href="<?php echo $landingPage["dominio"].$value["ruta_categoria"]."/".$value["ruta_articulo"]; ?>">leer mas...</a></p>

        <p> <?php echo $value ["descripcion_articulo"]?></p>
            </div>

      <?php endforeach?>
       
     
      <!-- <div class="blog-post">
        <h2 class="blog-post-title">New feature</h2>
        <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

        <p>From Tokyo to Mexico, to Rio. Yeah, you take me to utopia. I'm walking on air. We'd make out in your Mustang to Radiohead. I mean the ones, I mean like she's the one. Sun-kissed skin so hot we'll melt your popsicle. Slow cooking pancakes for my boy, still up, still fresh as a Daisy.</p>
        <ul>
          <li>I hope you got a healthy appetite.</li>
          <li>You're never gonna be unsatisfied.</li>
          <li>Got a motel and built a fort out of sheets.</li>
        </ul>
        <p>Don't need apologies. Boy, you're an alien your touch so foreign, it's <em>supernatural</em>, extraterrestrial. Talk about our future like we had a clue. I can feel a phoenix inside of me.</p>
      </div> -->

      <!-- <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav> -->

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic text-secondary">Artículos Destacados</h4>
        <!-- <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p> -->
      </div>

      <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sed nulla numquam quasi vitae totam distinctio eligendi adipisci incidunt ullam quibusdam ut facilis, soluta odio harum temporibus tenetur est eaque!</p> -->
      	<!-- Artículos destacados -->

          <div class="my-4">
					
					<!-- <h4>Artículos Destacados</h4> -->

					<?php foreach ($articulosDestacados as $key => $value): 


						$categorias = ControladorLandingPage::ctrMostrarCategirias("id_categoria", $value["id_cat"]); 


					?>

						<div class="d-flex my-3">
						
							<div class="w-100 w-xl-50 pr-3 pt-2">
								
								<a href="<?php echo $landingPage["dominio"].$categorias[0]["ruta_categoria"]."".$value["ruta_articulo"];?>">

									<img src="<?php echo $landingPage["dominio"].$value["portada_articulo"]; ?>" alt="<?php echo $value["titulo_articulo"];?>" class="img-fluid">

								</a>

							</div>

							<div>

								<a href="<?php echo $landingPage["dominio"].$categorias[0]["ruta_categoria"]."/".$value["ruta_articulo"];?>" class="text-secondary">

									<p class="small"><?php echo substr($value["descripcion_articulo"],0,-150)."...";?></p>

								</a>

							</div>

						</div>
						
					<?php endforeach ?>


				</div>
    	<!-- ARTÍCULOS RECIENTES -->

   

      <!-- <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div> -->
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

  <div class="container">
    <nav aria-label="Page navigation">
        <ul class="pagination" id="pagination" totalPaginas="<?php echo $totalPaginas;?>" paginaActual="<?php echo $paginaActual;?>"  rutaPagina="<?php echo $articulos[0]["ruta_categoria"]; ?>"</ul>
    </nav>
</div>


</main><!-- /.container -->


 
