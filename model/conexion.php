<?php
    class Conexion{
        public $con;

        public function __construct(){

            try{
                $this->con = new mysqli('localhost', 'root', '', 'database');
                echo "conexion nice";
            }catch(Exception $pe){
                echo "errora" . $pe->getMessage();
            }
        }

        public function getConn(){
            echo "nones";
            return $this->con;
        }
    }
?>