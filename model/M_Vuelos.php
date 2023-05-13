<?php
    require_once('model/conexion.php');

    public function getVuelos(){
        $query = $this->con->query("SELECT codigo_vuelo, id_ruta, fecha_salida, fecha_llegada, hora_salida, hora_llegada, estado, asientos_disponibles, precio
        FROM tbl_vuelos")
    }
?>