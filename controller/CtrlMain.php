<?php
    require_once ('../model/conexion.php');
   /* require_once ('../model/Mlogin.php');
    require_once ('../model/M_login.php');*/

    class Sesion{

    public function validarDatos()
    {
        $conexion = new Conexion();
        $usuarios = $conexion->getConn();


            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $enContrasena = md5($_POST['contrasena']);


            //$validar_login = mysqli_query( this.con, "SELECT * FROM tbl_usuario WHERE contrasena='$encConstrasena' and correo_usuario='$correo'");
            $validar_login = $usuarios->query("SELECT * FROM tbl_usuarios WHERE pass_user='$enContrasena' and mail_user='$correo'");

            if(mysqli_num_rows($validar_login) > 0){
                session_start();
                $_SESSION ['user'] = $correo;


                header('Location: ../view/welcome.php');

            }else{
                header('Location: ../view/login.php');

            }
    }

}



    $validar = new Sesion();
    $ver = $validar->validarDatos();

?>