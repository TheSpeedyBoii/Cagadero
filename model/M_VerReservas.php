<?php
    include('conexion.php');
    class Reservas{
        /* private $conexion;

        public function __construct($conexion){
            $this->conexion = $conexion;
        } */
        public function getPasajero(){
                $con = new Conexion();
                $conn = $con->getConn();
                $query = $conn->query ("SELECT * FROM tbl_pasajero");
                $retorno = [];

                $i = 0;
                while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
                }
        return $retorno;
        }

        public function getReserva(){
            $con = new Conexion();
            $conn = $con->getConn();
            $query = $conn->query ("SELECT * FROM tbl_reserva");
            $retorno = [];

            $i = 0;
            while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
            }
        return $retorno;
        }

        public function eliminarPasajero($idPasajero){
            $con = new Conexion();
            $conn = $con->getConn();
            $query = $conn->prepare("DELETE FROM tbl_pasajero WHERE id_pasajero = ?");
            $query->bind_param("i", $idPasajero);
            $query->execute();
            $query->close();
        }

     }
?>