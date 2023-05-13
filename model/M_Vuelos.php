<?php
    class Vuelo{
        public function __construct(){

            try{
                $this->con = new mysqli('localhost', 'root', '', 'database');
            }catch(Exception $pe){
                echo "Error en la Conexion" . $pe->getMessage();
            }
        }
        public function getVuelos(){
            $query = $this->con->query("SELECT codigo_vuelo, id_ruta, fecha_salida, fecha_llegada, hora_salida, hora_llegada, estado, asientos_disponibles, precio
            FROM tbl_vuelos");

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