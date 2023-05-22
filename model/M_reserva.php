<?php

    class reserva{
        private $conexion;

        public function __construct($conexion){
            $this->conexion = $conexion;
        }

        public function agregarReserva($fecha_actual,$precio_total){
            $stmt = $this->conexion->prepare("INSERT INTO tbl_reserva(fecha,precio_total) VALUES(?,?)");
            $stmt->bind_param("ss", $fecha_actual, $precio_total);
            $stmt->execute();
            $stmt->close();
        }
    }
?>