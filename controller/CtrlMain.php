<?php 

    require_once ('../model/conexion.php');
   /* require_once ('../model/Mlogin.php');
    require_once ('../model/M_login.php');*/

class Sesion{

    public function validarDatos()
    {
        $conexion = new Conexion();
        $usuarios = $conexion->getConn();
           /* $correo = trim($_POST['correo']);
            $contrasena = trim($_POST['contrasena']);
            // Verificar si los campos están vacíos
            if  (empty($correo) || empty($contrasena)) {
                echo 'Por favor, complete todos los campos';
                return;
            }*/

            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
          
            
            //$validar_login = mysqli_query( this.con, "SELECT * FROM tbl_usuario WHERE contrasena='$encConstrasena' and correo_usuario='$correo'");
            $validar_login = $usuarios->query("SELECT * FROM tbl_usuarios WHERE pass_user='$contrasena' and mail_user='$correo'");

            if(mysqli_num_rows($validar_login) > 0){
                $_SESSION['tbl_usuario'] = $correo;
                header('Location: ../view/welcome.php');
                exit();
            }else{
              echo'  ';
                exit();
            }
    }

}


    $validar = new Sesion();
    $ver = $validar->validarDatos();

    ?>

