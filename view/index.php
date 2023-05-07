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
</head>
<body>
    <form action="index.php?action=registrar" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="mail" name="correo" placeholder="email">
        <input type="password" name="contrasena" placeholder="contraseña">
        <input type="submit" value="enviar">
    </form>
    <h1>...</h1>
    <h1>...</h1>
    <h1>...</h1>
    <h1>...</h1>
    <h1>...</h1>
    <h1>...</h1>
    <h1>...</h1>
    <h1>...</h1>
</body>
</html>