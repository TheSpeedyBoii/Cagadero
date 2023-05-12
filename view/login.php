<?php
    require_once ('../model/conexion.php');
    require_once ('../model/M_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="">
        <input type="mail" name= "correo" placeholder= "Correo">
        <input type="password" name= "contrasena" placeholder= "Contraseña">
        <input type="submit" value="Enviar">
        <a href="index.php">Registrarse</a>
    </form>
</body>
</html>