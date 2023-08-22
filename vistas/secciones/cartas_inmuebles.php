<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">



      <?php foreach ($inmuebles as $key => $value): ?>

        <div class="col-md-4">
            <p class="text-center"> <?php echo $value ["titulo"];?></p>
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img src="<?php echo $landingPage["dominio"].$value["img_principal"];?>" alt="" width="100%" height="225">

            <div class="card-body">
              <p class="card-text"><?php echo $value ["descripcion"];?></p>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Terreno <?php echo $value ["metros_terreno"];?> m2 </li>
                <li class="list-group-item">Construccion <?php echo $value ["metros_construccion"];?> m2</li>
                <li class="list-group-item">Habitaciones <?php echo $value ["recamaras"];?></li>
                <li class="list-group-item">Estacionamiento <?php echo $value ["autos"];?></li>
                </ul>
              <div class="d-flex justify-content-between align-items-center">
                <!-- <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div> -->
                <!-- <small class="text-muted"><?php echo $value ["fecha"];?></small> -->
              </div>
            </div>
          </div>
        </div>
        
<?php endforeach?>
      


  


     

      </div>
    </div>
  </div>
