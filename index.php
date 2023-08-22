<?php

require_once "controladores/plantilla.controlador.php";

require_once "controladores/landingPage.controlador.php";
require_once "modelos/landingPage.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla-> ctrTraerPlantilla();
