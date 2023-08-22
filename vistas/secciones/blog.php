
<?php
 
 if(isset ($_GET["pagina"]) && is_numeric ($_GET["pagina"])){

  $paginaActual = $_GET["pagina"];

 }else {

  $paginaActual = 1;


 }


?>
  

  <body>
    
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

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Blog</h1>
      <p class="lead my-3">Temas de interes</p>
      <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
    </div>
  </div>

  <!-- <div class="row mb-2">
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
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

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
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>
</div> -->

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
      Articulos      </h3>

      <?php foreach ($articulos as $key => $value): ?>  

<div class="blog-post">
<h2 class="blog-post-title"><?php echo $value ["titulo_articulo"]?></h2>
<p class="blog-post-meta"><?php echo $value ["fecha_articulo"]?> <a href="<?php echo $landingPage["dominio"].$value["ruta_categoria"]."/".$value["ruta_articulo"]; ?>">leer mas...</a></p>
<p> <?php echo $value ["descripcion_articulo"]?> ...</p>
</div>


<?php endforeach?>



                <div class="col-sm-4">
                <nav aria-label="Page navigation">
                <ul class="pagination" id="pagination" totalPaginas="<?php echo $totalPaginas;?>" paginaActual="<?php echo $paginaActual;?>" rutaPagina ></ul>
                </nav>
</div>


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <!-- <h4 class="font-italic">About</h4> -->
        <!-- <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p> -->
      </div>

      <div class="p-4">
        <	<div>

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
        <h4 class="font-italic">Elsewhere</h4>
        <?php
    
    $redesSociales = json_decode($landingPage["redes_sociales"], true);


    foreach ($redesSociales as $key => $value){

         echo'
               <li class="ftco-animate text-primary"><a href="'.$value["url"].'"><span class="'.$value["icono"].'"></span></a>'.$value["red"].'</li>';
          }
   ?>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<!-- <footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer> -->


    
  </body>

