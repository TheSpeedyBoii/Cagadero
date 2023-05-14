<?php
   require_once ('../model/conexion.php');
    require_once ('../model/M_login.php');
    require_once ('../controller/CtrlMain.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="../controller/CtrlMain.php" method="post">
        <input type="mail" id="correo" name="correo" placeholder="Correo">
        <input type="password" id="contrasena"name="contrasena" placeholder="Contraseña">
        <input type="submit" value="Enviar">
        <a href="register.php">Registrarse</a>
    </form>
</body>
</html>