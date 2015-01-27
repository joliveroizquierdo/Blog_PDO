<?php

 /*require_once 'modelos/usuarioModelo.php';

  $objetoUsuario = new usuarios();
  $datos = $objetoUsuario->listarUsuarios();

  foreach($datos as $dato){

    echo $dato['nombres'];
    echo '<br>';
  }*/

  //Enrutado de la aplicacion
  if(!empty($_GET["accion"])){

          $accion=$_GET["accion"];

  }else{

          $accion="index";

       }

  if(is_file("controladores/".$accion."Controlador.php")){

          require_once("controladores/".$accion."Controlador.php");

  }else{

          require_once("controladores/errorControlador.php");

  }

?>
