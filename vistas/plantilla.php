<?php

$landingPage = ControladorLandingPage::ctrMostrarLandingPage();
$menu = ControladorLandingPage::ctrMostrarMenuPrincipal();
$categorias = ControladorLandingPage::ctrMostrarCategirias(null,null);
// $menuBlog = ControladorLandingPage::ctrMostrarMenuBlog();
$articulos = ControladorLandingPage::ctrMostrarConInnerJoin(0,3, null, null);
// $menuArticulos = ControladorLandingPage::ctrMostrarMenuBlog();
$totalArticulos = ControladorLandingPage::ctrMostrarTotalArticulos(null,null);
$totalPaginas = ceil (count($totalArticulos)/3);
$inmuebles = ControladorLandingPage::ctrMostrarPropiedades();
$cartas = ControladorLandingPage:: ctrMostrarCartas();
// echo '<pre>'; print_r($inmuebles); echo '</pre>';
// ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Cesar Rivera">
    <!-- <meta name="generator" content="Hugo 0.80.0"> -->
    <meta name ="title" content="Cesar">
    <meta name="description" content="lorem isn">
  

    <?php
    if ( is_array ( $landingPage )) {
    $palabras_claves = json_decode($landingPage["palabras_claves"], true);
    $p_claves ="";
    foreach ($palabras_claves as $key => $value){
      $p_claves .= $value.", ";
    }
    $p_claves .= substr($p_claves,0, -2);
  }
    ?>
    <meta name="keywords" content="<?php echo $p_claves?>">



    <title><?php echo $landingPage["titulo"] ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="<?php echo $landingPage["dominio"];?>vistas/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $landingPage["dominio"];?>vistas/css/blog.css" rel="stylesheet">






    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <!-- <link href="carousel.css" rel="stylesheet"> -->
    <link href="<?php echo $landingPage["dominio"];?>vistas/dist/css/carousel.css" rel="stylesheet">
    <link href="<?php echo $landingPage["dominio"];?>vistas/css/mystyles.css" rel="stylesheet">
    <link href="<?php echo $landingPage["dominio"];?>vistas/css/styles_msn.css" rel="stylesheet">
    <link href="<?php echo $landingPage["dominio"];?>vistas/plugins/fontawesome-free-5.11.2/css/all.css" rel="stylesheet">
    <link href="<?php echo $landingPage["dominio"];?>vistas/js/notie.min.js">



  </head>
  <body>

    
<header>



  <?php

      include "secciones/menu.php";

  ?>

</header>

<main role="main">
   



  <?php




// *********
	/*=============================================
	Navegar entre páginas
	=============================================*/

	$validarRuta = "";

	if(isset($_GET["pagina"])){

		$rutas = explode("/", $_GET["pagina"]);

		
		if(is_numeric($rutas[0])){

			$desde = ($rutas[0] -1)* 3;

			$cantidad = 3;

			$articulos = ControladorLandingPage::ctrMostrarConInnerJoin($desde, $cantidad, null, null);

		}else{

			foreach ($categorias as $key => $value) {
			
				if($rutas[0] == $value["ruta_categoria"]){

					$validarRuta = "categorias";

					break;

				}else if($rutas[0] == "blog"){

					$validarRuta = "blog";

					break;

				}else if($rutas[0] == "inicio"){

					$validarRuta = "inicio";

					break;

				} 
				// else if($rutas[0] == "buscador"){

				// 	$validarRuta = "buscador";

				//  	break;}
				
				else{

				$validarRuta = "buscador";
				break;

				}
			}

		}

		/*=============================================
		Indice 1: Rutas de Artículos o Paginación de categorías
		=============================================*/

		if(isset($rutas[1])){

			if(is_numeric($rutas[1])){

				$desde = ($rutas[1] -1)* 3;

				$cantidad = 3;

				$articulos = ControladorLandingPage::ctrMostrarConInnerJoin($desde, $cantidad, null, null);

			}else{

				foreach ($totalArticulos as $key => $value) {
				
					if($rutas[1] == $value["ruta_articulo"]){

						$validarRuta = "articulo";

						break;

					}
				}

			}


		}
   

		/*=============================================
		Validar las rutas
		=============================================*/
		if($validarRuta == "categorias"){

			include "secciones/blog_categorias.php";

		} else if($validarRuta == "buscador"){

		 	include "secciones/contenido-buscador.php";
		 }
    else if($validarRuta == "blog"){

			include "secciones/blog.php";

		}else if($validarRuta == "inicio"){

			include "secciones/inicio.php";

		}
    else if($validarRuta == "articulo"){

			include "secciones/articulo.php";

		}else if(is_numeric($rutas[0]) && $rutas[0] <= $totalPaginas){

			include "secciones/blog.php";

		}else if(isset($rutas[1]) && is_numeric($rutas[1])){

			include "secciones/blog_categorias.php";

		}else{

			include "secciones/404.php";
			var_dump ("ruta",$validarRuta);
		}


	}else{

		include "secciones/inicio.php";

	}	

// if (isset($_GET["pagina"])){

//   $rutas = explode("/", $_GET["pagina"]);


//                 if ($_GET["pagina"] == "inicio" ||
//                     $_GET["pagina"] == "precios"  ||
//                     $_GET["pagina"] == "blog"  ||
//                     $_GET["pagina"] == "contacto"    ){

//                     include "secciones/".$_GET["pagina"].".php";

//                   }elseif (isset($_GET["pagina"])){
//                           foreach ($categorias as $key => $value){
                        
//                             if ($_GET["pagina"]== $value["ruta_categoria"]){
//                               include "secciones/blog_categorias.php";
//                             }
//                           }
//                           foreach ($articulos as $key => $value){
                
//                             if ($_GET["pagina"]== $value["ruta_articulo"]){
//                               include "secciones/articulo.php";
                            
//                             }
                             
//                              }
//                 } else {include "secciones/404.php";}

//   }else{

//   include "secciones/inicio.php";

//  }




//  ?>


  


  <!-- FOOTER -->
  
</main>
<?php
    // echo '<pre>'; print_r($rutas); echo '</pre>';

  // include "secciones/newsletter.php";

  include "secciones/footer.php";

?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="vistas/dist/js/jquery.slim.min.js"><\/script>')</script><script src="vistas/dist/js/bootstrap.bundle.min.js"></script>
      <script language="JavaScript" id ="rutaActual" type="text/javascript" src="<?php echo $landingPage["dominio"];?>vistas/js/jquery.twbsPagination.js"></script>
      <script language="JavaScript" type="text/javascript" src="<?php echo $landingPage["dominio"];?>vistas/js/paginacion.js"></script>
      <script language="JavaScript" type="text/javascript" src="<?php echo $landingPage["dominio"];?>vistas/js/myjs.js"></script>

   
        <!-- <script src="vistas/js/jquery.twbsPagination.js"></script> -->
      
      
  </body>
</html>
