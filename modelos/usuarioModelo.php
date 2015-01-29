<?php

  require_once 'config/conexion.php';

  class Usuarios extends Conexion {

    private $con;

    function __construct() {

      $this->con = parent::conectar();

    }

    /*public function listarUsuarios() {

      $consulta = "select * from usuarios;";
      $stmt = $this->con->query($consulta);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
      //el valor entre los corches creo que es inncesario, ya que es e lvalor por defecto
    }*/

    public function crearUsuario(){

      $consulta = "INSERT INTO `usuarios` VALUES(null, ?, ?, ?, ?);";
      $stmt = $this->con->prepare($consulta);
      $stmt->bindValue(1, $_POST['nombres'], PDO::PARAM_STR);
      $stmt->bindValue(2, $_POST['apellidos'], PDO::PARAM_STR);
      $stmt->bindValue(3, $_POST['correo'], PDO::PARAM_STR);
      $stmt->bindValue(4, $_POST['clave'], PDO::PARAM_STR);
      $stmt->execute();
      echo 'Se guardo el usuario';
      //header("Location: noticias.php?m=1");

    }

  }

?>
