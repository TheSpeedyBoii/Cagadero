<?php
    require_once("../model/conexion.php");
    require_once("../model/M_reserva.php");

    class C_reserva{

        function registrarReserva(){
            if(isset($_POST['calcular'])){
            $fecha_actual = date('Y-m-d');
            $precio_total = $_POST['precio_total'];

            $conexion = new Conexion();
            $reserva = new reserva($conexion->getConn());

            $reserva->agregarReserva($fecha_actual, $precio_total);

            }
        }

    }

?>