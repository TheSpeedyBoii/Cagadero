<?php
   require_once '../controller/validar_sesion.php';
   require_once '../controller/C_pasajero.php';
   require_once '../model/conexion.php';

   $control = new C_pasajero();
   $control->registrarPasajero();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Reservas</title>
</head>
<body>
 <?php
 require_once 'header.php';
 ?>
<div class="reserva"><h1>Has tu reserva</h1></div>
    <div class="container">
        <div class="form-container">
            <form action="" method="post">
            <h4>Vuelo Seleccionado</h4>
            <?php
                if (isset($_GET['fila'])) {
                    $fila = unserialize($_GET['fila']);
                    echo "<h1>" . $fila['codigo_vuelo'] . "</h1>";
                    echo "<h1>" . $fila['ruta'] . "</h1>";
                    echo "<h1>" . $fila['precio'] . "</h1>";
                }
            ?>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Pasajero</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="nombre" placeholder="Ingrese su telefono">
                </div>
                <div class="mb-3">
                    <label for="fechaedad">Fecha de Nacimiento</label>
                    <input class="fecha" type="date" name="fechaedad">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo">
                </div>
                <button type="submit" class="btn btn-primary" name="reserva">Reservar</button>
            </form>
        </div>
    </div>
</body>
</html>