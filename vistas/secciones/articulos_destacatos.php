<div class="my-4">
					
					<!-- <h4>Artículos Destacados</h4> -->

					<?php foreach ($articulosDestacados as $key => $value): 


						$categoria = ControladorLandingPage::ctrMostrarCategirias("id_categoria", $value["id_cat"]); 


					?>

						<div class="d-flex my-3">
						
							<div class="w-100 w-xl-50 pr-3 pt-2">
								
								<a href="<?php echo $landingPage["dominio"].$categoria[0]["ruta_categoria"]."/".$value["ruta_articulo"];?>">

									<img src="<?php echo $landingPagelog["dominio"].$value["portada_articulo"]; ?>" alt="<?php echo $value["titulo_articulo"];?>" class="img-fluid">

								</a>

							</div>

							<div>

								<a href="<?php echo $landingPage["dominio"].$categoria[0]["ruta_categoria"]."/".$value["ruta_articulo"];?>" class="text-secondary">

									<p class="small"><?php echo substr($value["descripcion_articulo"],0,-150)."...";?></p>

								</a>

							</div>

						</div>
						
					<?php endforeach ?>


				</div>