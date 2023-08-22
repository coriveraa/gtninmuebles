	<!-- FORMULARIO DE OPINIONES -->
					
    <form method="post" enctype="multipart/form-data">

<input type="hidden" name="id_art" value="<?php echo $articulo[0]["id_articulo"]; ?>">

<label class="text-muted lead">¿Qué tal te pareció el artículo?</label>

<div class="row">
    
    <div class="col-12 col-md-8 col-lg-9">
        
        <div class="input-group-lg">
            
            <input type="text" class="form-control my-3" placeholder="Tu nombre" name="nombre_opinion" required>

            <input type="email" class="form-control my-3" placeholder="Tu email" name="correo_opinion" required>

        </div>

    </div>

    <input type="file" name="fotoOpinion" class="d-none" id="fotoOpinion">

    <label for="fotoOpinion" class="d-none d-md-block col-md-4 col-lg-3">
        
        <img src="<?php echo $landingPage["dominio"];?>vistas/img/subirFoto.png" class="img-fluid mt-md-3 mt-xl-2 prevFotoOpinion">

    </label>

</div>	

<textarea class="form-control my-3" rows="7" placeholder="Escribe aquí tu mensaje" name="contenido_opinion" required></textarea>

<input type="submit" class="btn btn-dark btn-lg btn-block" value="Enviar">

<?php 

    $enviarOpinion = ControladorLandingPage::ctrEnviarOpinion();
    
    if($enviarOpinion != ""){

        echo '<script>

            if ( window.history.replaceState ) {

                window.history.replaceState( null, null, window.location.href );

            }

        </script>';

        if($enviarOpinion == "ok"){

            echo '<script>


                notie.alert({
                    type: 1,
                    text: "La opinión ha sido enviada correctamente",
                    time: 10

                })

            </script>';

        }

        if($enviarOpinion == "error"){

            echo '<script>


                notie.alert({
                    type: 3,
                    text: "No se permiten caracteres especiales en el formulario",
                    time: 10

                })

            </script>';

        }

        if($enviarOpinion == "error-formato"){

            echo '<script>


                notie.alert({
                    type: 3,
                    text: "Error en el formato de la imagen, debe ser JPG o PNG",
                    time: 10

                })

            </script>';

        }

    }

?>

</form>