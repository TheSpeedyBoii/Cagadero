<?php
   require_once '../controller/validar_sesion.php';
   require_once '../controller/C_pasajero.php';
   require_once '../model/conexion.php';
   require_once '../controller/C_reserva.php';

   $controlPasajero = new C_pasajero();
   $controlPasajero->registrarPasajero();

   $controlReserva = new C_reserva();
   $controlReserva->registrarReserva();
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
    <div class="container" style="display:flex; justify-content: space-around;">
            <div class="col-md-6">
                <h2 class="text-center">Has tu reserva</h2>
                <form action="" method="post">
                <h4>Vuelo Seleccionado</h4>
                <?php
                    if (isset($_GET['fila'])) {
                           $fila = unserialize($_GET['fila']);
                        echo "<h2>" . $fila['codigo_vuelo'] . "</h2>";
                        echo "<h2>" . $fila['ruta'] . "</h2>";
                        echo "<h2>" . $fila['precio'] . "</h2>";
                    }
                ?>
                    <label for="asientos" class="form-label">Número de asientos</label>
                    <div class="mb-3 col-md-1">
                        <input type="number" class="form-control" name="asientos" placeholder="1">
                        <?php
                                if(isset($_POST['reserva'])){
                                    $asientos = $_POST['asientos'];
                                    $precio_total = $asientos*$fila['precio'];
                                    echo '<form action="../controller/C_reserva.php" method="post">
                                          <input type="hidden" name="precio_total" value="'.$precio_total.'">
                                          <input class="btn-buscar" type="submit" name="calcular" value="✔">
                                          </form>
                                          ';
                                }
                                ?>
                    </div>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Ver Reserva
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
    </div>
</body>
</html>