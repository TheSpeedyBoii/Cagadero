<?php
    require_once '../model/conexion.php';
    // require_once '../model/usuario.php';
    require_once '../controller/C_registro.php';

    $control = new C_registro();
    $control->returnManejos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
    <img src="images/register/logo.png" alt="">
    <div class="regi"><h1>Registrate</h1></div>
    <div class="container">
        <div class="form-container">
            <form action="register.php?action=registrar" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo">
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
                <a href="login.php" class="btn btn-primary" >Iniciar Sesión</a>
            </form>
        </div>
    </div>
</body>
</html>

