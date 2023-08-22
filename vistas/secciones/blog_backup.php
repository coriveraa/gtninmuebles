
<?php
 
 if(isset ($_GET["pagina"]) && is_numeric ($_GET["pagina"])){

  $paginaActual = $_GET["pagina"];

 }else {

  $paginaActual = 1;


 }


  //  $articulos = ControladorLandingPage::ctrMostrarConInnerJoin(5,"ruta_categoria",$_GET["pagina"]);
  // $articulos = ControladorLandingPage::ctrMostrarConInnerJoin(0,3);
  //  $articulos = ControladorLandingPage::ctrMostrarTotalArticulos();
  //  echo '<pre>'; print_r($articulos); echo '</pre>';
   
  

 

?>
  
  
  <div>
    <!-- BREADCRUMB -->

	
  
    

<div class="container">


  
  <div class="nav-scroller py-1 mb-2">


    <nav class="nav d-flex justify-content-between">

    <!-- <a class="p-2 text-muted" href="#">World</a> -->

    <?php foreach ($categorias as $key => $value): ?>

                  <a class="p-2 text-muted" href="<?php echo $value ["ruta_categoria"]; ?>"><?php echo $value ["titulo_categoria"]?></a>

    <?php endforeach?>
    


     
    </nav>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark text-primary">
    <div class="col-md-6 px-0 ">
      <h1 class="display-4 font-italic">Nuestro Rincon Digital</h1>
      <p class="lead my-3">Este es un pequeño espacio en el que te compartimos nuestra opinion respecto a distintitos temas relacionados con la tecnologia.</p> 
       <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold text-primary">Continue reading...</a></p>  -->
    </div>
  </div>

  <div class="row mb-2">

    <div class="col-md-6">
       <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-ipad" width="200" height="250" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M18 2a3 3 0 0 1 2.995 2.824l.005 .176v14a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005h12zm-3 15h-6l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h6l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
</svg>       
        </div>
      </div>
    </div> 

    <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">Post title</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="stretched-link">Continue reading</a>
              </div>
                <div class="col-auto d-none d-lg-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-tablet-bolt"  width="200" height="250" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M13.5 21h-7.5a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8" />
  <path d="M19 16l-2 3h4l-2 3" />
  <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
</svg>

                </div>
            </div>
        </div>
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
        <p class="blog-post-meta"><?php echo $value ["fecha_articulo"]?> <a href="<?php echo $landingPage["dominio"].$value["ruta_categoria"]."/".$value["ruta_articulo"]; ?>">leer mas...</a></p>
       <p> <?php echo $value ["contenido_articulo"]?></p>
      </div>


      <?php endforeach?>
       
     
  

      
    </div><!-- /.blog-main -->

     <aside class="col-md-4 blog-sidebar">



     


     <!-- BREADCRUMB -->

		<!-- <a href="<?php echo $articulo[0]["ruta_categoria"]; ?>">
			
			<button class="d-block d-sm-none btn btn-info btn-sm mb-2">
			
				REGRESAR 

			</button>

		</a>

		<ul class="breadcrumb bg-white p-0 mb-2 mb-md-4 breadArticulo">

			<li class="breadcrumb-item inicio"><a href="<?php echo $landingPage["dominio"];?>">Inicio</a></li>

			<li class="breadcrumb-item"><a href="<?php echo $landingPage["dominio"].$categorias[0]["ruta_categoria"]; ?>"><?php echo $articulos[0]["descripcion_categoria"]; ?></a></li>

			<li class="breadcrumb-item active"><?php echo $articulos[0]["titulo_articulo"]; ?></li>

		</ul> -->

      <!-- <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p>
      </div> -->

      <div class="p-4">
        <!-- <h4 class="font-italic">Archives</h4> -->
      	<div>

						<h4>Etiquetas</h4>

						<?php 

							$tags = json_decode($articulos[0]["palabras_claves_art"], true);

						 ?>

						 <?php foreach ($tags as $key => $value): ?>

						 	<a href="<?php echo $landingPage["dominio"].preg_replace('/[0-9ñÑáéíóúÁÉÍÓÚ ]/', "_", $value); ?>" class="btn btn-secondary btn-sm m-1"><?php echo $value; ?></a> 
						 	
						 <?php endforeach ?>		
		
													
					</div>

      </div>

      <div class="p-4">
        <!-- <h4 class="font-italic">Elsewhere</h4> -->
        <?php
    
    $redesSociales = json_decode($landingPage["redes_sociales"], true);


    foreach ($redesSociales as $key => $value){

         echo'
               <li class="ftco-animate text-primary"><a href="'.$value["url"].'"><span class="'.$value["icono"].'"></span></a>'.$value["red"].'</li>';
          }
   ?>
      </div>
    </aside> 
    <!-- /.blog-sidebar -->

  </div><!-- /.row -->

   <!-- <nav aria-label="Page navigation ">
  <ul id='pagination' class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>   -->



<div class="container">
    <nav aria-label="Page navigation">
        <ul class="pagination" id="pagination" totalPaginas="<?php echo $totalPaginas;?>" paginaActual="<?php echo $paginaActual;?>" rutaPagina ></ul>
    </nav>
</div>


</main><!-- /.container -->

      


  
