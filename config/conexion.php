<?php

  abstract class Conexion{

    protected $dbh;

    public function conectar(){

      try{

        $motor		= 'mysql';
        $servidor 	= 'localhost';
        $bd			= 'blog_pdo';
        $user			= 'root';
        $password	= '';

        $this->dbh = new PDO(
          $motor . ':host=' . $servidor . ';dbname=' . $bd, $user, $password,
          array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->dbh;

      }catch(PDOException $e){

        echo 'Error en la conexión: ' . $e->getMessage();

      }
    }
  }

?>
