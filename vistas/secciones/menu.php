





<nav class="navbar navbar-expand-md navbar-dark fixed-top bg_nav ">
  <a class ="whatsapp" href="https://api.whatsapp.com/send?phone=+523310202579" class="whatsapp" target="_blank"> <i class="fab fa-whatsapp"></i></a>
  <a class ="face" href="https://m.me/bailefit4/" class="face" target="_blank"> <i class="fab fa-facebook-messenger"></i></a>
  
    <a href="<?php echo $landingPage["dominio"];?>"><?php echo $landingPage["titulo"] ?></a>
    <!-- <img src="<?php echo $landingPage["dominio"];?>" alt=""> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

     <?php foreach ($menu as $key => $value):?>
     <li class="nav-item">
     <a class="p-2" href="<?php echo $value ["ruta_categoria"]; ?>"><?php echo $value ["titulo_categoria"]?></a>
        </li>
     <?php endforeach?>


        <!-- <li class="nav-item active">
          <a class="nav-link" href="index.php?pagina=inicio">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pagina=precios">Sitios Web</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pagina=blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="index.php?pagina=contacto" tabindex="-1" aria-disabled="true">Contacto</a>
        </li> -->
        <!-- <li class="nav-item">
        <a class="nav-link fa fa-phone fa-lg" aria-hidden="true" href="tel:+523310202579">Llama ahora</a>
        </li> -->
      </ul>
      <!-- <a class="fa fa-phone fa-4x float-right" aria-hidden="true" href="tel:+523310202579">Llama ahora</a> -->
      

      <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form> -->
    </div>
    
    <a href="tel:+523310202579">Llama ahora</a>
  </nav>