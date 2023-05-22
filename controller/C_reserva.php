<?php
    require_once("../model/conexion.php");
    require_once("../model/M_reserva.php");

    class C_reserva{

        function registrarReserva(){
            if (isset($_POST['reserva'])) {
                $asientos = $_POST['asientos'];
                $precio = $_POST['precio'];
                $precio_total = $asientos * $precio;

                $fecha_actual = date('Y-m-d');

                $conexion = new Conexion();
                $reserva = new reserva($conexion->getConn());

                $reserva->agregarReserva($fecha_actual, $precio_total);
            }
        }


    }

?>