<?php

  require 'modelos/usuarioModelo.php';

  $objUsuario = new Usuarios();
  $objUsuario->saludo();

  echo 'Hola desde el controlador crear usuario que se encargara de crear la instancia del modelo y de guardar los datos '

?>
