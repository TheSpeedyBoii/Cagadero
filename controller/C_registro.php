<?php
require_once '../model/conexion.php';
require_once '../model/usuario.php';
class C_registro
{
    public function returnManejos()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case 'registrar':
                $this->registrar();
                break;
            default:
                echo 'errorcito perron';
                break;
        }
    }
    public function registrar()
    {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

        $conexion = new Conexion();
        $usuarios = new Usuario($conexion->getConn());
        $usuarios->agregarUsuario($nombre, $correo, $contrasena);

        header('Location: index.php');
        exit;
    }
}
?>