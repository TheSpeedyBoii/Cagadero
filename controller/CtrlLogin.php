<?php 
    if (isset($_POST["co"]) && isset($_POST["pass"])) {

        $co = trim($_POST['co']);
        $email_regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
         if (!preg_match($email_regex, $co)) {
             echo "La dirección de correo electrónico no es válida";
             return;
         }

        require_once("../Model/Login.php");
        $validar = new Login();
        $validar->validarDatos($_POST["co"], $_POST["pass"]);

    } else {
        header("location:../index.php");
    }
?>