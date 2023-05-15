<?php
  /* require_once ('../model/conexion.php');
    require_once ('../model/M_login.php');
    require_once ('../controller/CtrlMain.php');*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body>
<img src="images/register/logo.png" alt="">
    <h1 class="titulo">Iniciar Sesión</h1>
    <form action="../controller/CtrlMain.php" method="post">
        <div class="form-container">
                <label for="nombre" class="form-label">Correo</label>
                <input type="mail" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo">
                <label for="nombre" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena"name="contrasena" placeholder="Ingrese su contraseña">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <a href="register.php" class="btn btn-primary" >Registrarse</a>
        </div>
    </form>
</body>
</html>