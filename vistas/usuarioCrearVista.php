<?php
?>
<html>
  <head>
    <title>Formulario para insertar usuarios</title>
    <meta charset="utf-8">
  </head>
  <body>

    <form id="form_id" action="?accion=usuarioCrear" method="post">

      <label for="nombres">Nombres:</label>
      <input type="text" name="nombres" value="">

      <label for="apellidos">Apellidos</label>
      <input type="text" name="apellidos" value="">

      <label for="correo">E-mail</label>
      <input type="text" name="correo" value="">

      <label for="clave">Password</label>
      <input type="password" name="clave" value="">

      <input type="submit" name="guardarUsuario" value="Guardar datos">

    </form>

  </body>
</html>
