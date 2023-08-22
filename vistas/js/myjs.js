/*=============================================
OPINIONES VACÍAS
=============================================*/

if($(".opiniones").html()){

	if(document.querySelector(".opiniones").childNodes.length == 1){	

		$(".opiniones").html(`

			<p class="pl-3 text-secondary">¡Este artículo no tiene opiniones!</p>

		`)
	}

}

/*=============================================
SUBIR FOTO TEMPORAL DE OPINIÓN
=============================================*/
$("#fotoOpinion").change(function(){
    $(".alert").remove();
    
        
        var imagen = this.files[0];
        
        /*=============================================
        VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
        =============================================*/
    
        if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
    
            $("#fotoOpinion").val("");
    
            $("#fotoOpinion").after(`
    
                    <div class="aler alert-danger">¡La imagen debe estar en formato JPG o PNG!</div>
                
            `)
    
            return;
    
        }else if(imagen["size"] > 2000000){
    
            $("#fotoOpinion").val("");
    
            $("#fotoOpinion").after(`
    
                    <div class="aler alert-danger">¡La imagen no debe pesar más de 2MB!</div>
                
            `)
    
            return;
        
        }else{
    
             var datosImagen = new FileReader;
    
             datosImagen.readAsDataURL(imagen);
    
             $(datosImagen).on("load", function(event){
    
                 var rutaImagen = event.target.result;
    
                 $(".prevFotoOpinion").attr("src", rutaImagen);
    
             })
    
        }
    
    })

/*=============================================
BUSCADOR
=============================================*/

$(".buscador").change(function(){

	var busqueda = $(this).val().toLowerCase();

	var expresion = /^[a-z0-9ñÑáéíóú ]*$/;

	if(!expresion.test(busqueda)){

		$(".buscador").val("");

	}else{

		var evaluarBusqueda = busqueda.replace(/[0-9ñáéíóú ]/g, "_");

		var rutaBuscador = evaluarBusqueda;

		$(".buscar").click(function(){

			if($(this).parent().parent().children(".buscador").val() != ""){

				window.location = rutaActual+rutaBuscador;

			}

		})

	}

})

/*=============================================
BUSCADOR CON ENTER
=============================================*/

$(document).on("keyup", ".buscador", function(evento){

	evento.preventDefault();

	if(evento.keyCode == 13 && $(".buscador").val() != ""){

		var busqueda = $(this).val().toLowerCase();

		var expresion = /^[a-z0-9ñÑáéíóú ]*$/;

		if(!expresion.test(busqueda)){

			$(".buscador").val("");

		}else{

			var evaluarBusqueda = busqueda.replace(/[0-9ñáéíóú ]/g, "_");

			var rutaBuscador = evaluarBusqueda;

			window.location = rutaActual+rutaBuscador;

		}


	}

})

