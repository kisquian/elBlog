<?php 
 include_once('inc/includes.php');
 include_once('app/models/Servicios.php');
  
  $servicio = new Servicio();
  $published = 1;
  $listaServicios = $servicio->listarServiciosPublicados($published);
  

  include_once('app/views/front-servicios.php');
?>