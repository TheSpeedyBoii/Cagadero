<?php

    require_once('../model/conexion.php');

    class login extends conexion{

        if ($con->connect_error){
            die("Connection failed: " . $con->connect_error);
        }

        function validarlogin($correo,$contrasena){
            $sql = "SELECT tbl_usuarios, mail_user FROM tbl_usuarios ";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "So' ta bueno";
                }
              } else {
                echo "No hay ni pipiza pa'";
              }
              $conn->close();
        }


    }

?>