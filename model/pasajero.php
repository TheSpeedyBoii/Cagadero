<?php

    class pasajero{
        private $conexion;

        public function __construct($conexion){
            $this->conexion = $conexion;
        }

        public function agregarPasajero($nombre, $telefono, $fechaedad, $correo){
            $stmt = $this->conexion->prepare("INSERT INTO tbl_pasajero(nombre, telefono, fecha_nacimiento, email) VALUES(?,?,?,?)");
            $stmt->bind_param("ssss", $nombre, $telefono, $fechaedad, $correo);
            $stmt->execute();
            $stmt->close();
        }


        public function existeCorreo($correo)
        {
            $stmt = $this->conexion->prepare("SELECT COUNT(*) FROM tbl_pasajero WHERE email = ?");
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $stmt->bind_result($count);
            $stmt->fetch();
            $stmt->close();
            return $count > 0;
        }
    }
?>