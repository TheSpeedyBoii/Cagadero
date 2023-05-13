<?php
    include('conexion.php');
    class Vuelo{
        
        public function getVuelos(){
            $con = new Conexion();
            $conn = $con->getConn();
            $query = $conn->query("SELECT codigo_vuelo, R.descripcion AS ruta, fecha_salida, fecha_llegada, hora_salida, hora_llegada, estado, asientos_disponibles, precio
            FROM tbl_vuelos AS V
            INNER JOIN tbl_ruta as R
            ON V.id_ruta = R.id_ruta");

            $retorno = [];

            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
            }
            return $retorno;
        }
    }
?>