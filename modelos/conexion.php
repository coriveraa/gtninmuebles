<?php

class Conexion {

static public function conectar(){


    $link = new PDO("mysql:host=localhost;dbname=sartech_gtninmuebles",
                    "root",
                     "");
      $link-> exec("set names utf8");

   // $link = new PDO("mysql:host=localhost;dbname=sartechc_central_aepca",
     //               "sartechc",
       //             "$@rT3ch$21");
    // $link-> exec("set names utf8");

    return $link;


}



}