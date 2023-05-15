<?php
    require_once('../model/conexion.php');
    require_once('../controller/CtrlMain.php');
    require_once('controller/Mlogin.php');

    class LoginUsuario{

      private $conexion;

      public function __construct($conexion){
          $this->conexion = $conexion;
      }

    public function getUsuarios($correo, $contrasena){
      $stmt = $this->conexion->prepare("SELECT mail_user, pass_user from tblusuarios VALUES(?,?)");
      $stmt->bind_param("ss", $correo, $contrasena);
      $stmt->execute();
      $stmt->close();
      echo"melo caramelo";
    }
  }

?>