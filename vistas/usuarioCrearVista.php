<?php
?>
<html>
  <head>
    <title>Formulario para insertar usuarios</title>
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
      <input type="text" name="clave" value="">

      <input type="submit" name="guardarUsuario" value="Gurdar datos">

    </form>

  </body>
</html>
