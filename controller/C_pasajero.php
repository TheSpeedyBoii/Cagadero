<?php
    require_once("../model/conexion.php");
    require_once("../model/M_pasajero.php");

    class C_pasajero{

        function registrarPasajero(){
            if(isset($_POST['reserva'])){
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $fechaedad= ($_POST['fechaedad']);
            $correo = ($_POST['correo']);


            if (empty($nombre) || empty($telefono) || empty($fechaedad) || empty($correo)) {
                echo 'Por favor, complete todos los campos';
                return;
            }

            // Validar la dirección de correo electrónico
            $email_regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
            if (!preg_match($email_regex, $correo)) {
                echo "La dirección de correo electrónico no es válida";
                return;
            }

            
    
            $conexion = new Conexion();
            $pasajero = new pasajero($conexion->getConn());
    
            // Verificar si el correo electrónico ya está registrado en la base de datos
            if ($pasajero->existeCorreo($correo)) {
                echo "El correo electrónico ya está registrado";
                return;
            }
    
            $pasajero->agregarPasajero($nombre,$telefono,$fechaedad,$correo);
    
        }
        }
    }

?>