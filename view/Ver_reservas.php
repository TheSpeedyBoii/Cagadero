<?php
  require_once('../controller/C_VerPasajero.php');
  require_once('../controller/C_VerReservas.php');
  require_once '../controller/validar_sesion.php';
  require_once '../controller/C_pasajero.php';
  require_once '../model/conexion.php';
  require_once '../controller/C_reserva.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sus reservas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/32e9fc3fbe.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    require_once('header.php')
    ?>
    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col">
          <table class="table table-striped table-hover">
          <br>
          <h2>Reserva registrada</h2>
          <thead>
            <tr>
              <th scope="col">ID Reserva</th>
              <th scope="col">Fecha reserva</th>
              <th scope="col">Precio total</th>
            </tr>
          </thead>
          <tbody>
          <?php
            if(!$reservas){
              echo"<tr>";
              echo"<td>";
              echo"No hay vuelos para esta fecha";
              echo"</td>";
              echo"</tr>";
            }
            else{
                foreach($reservas as $reserva){
                  echo "<tr>";
                  echo '<input type="hidden" name="filaReserva" value="' . htmlspecialchars(serialize($reserva)) . '">';
                  echo"<td>".$reserva['codigo_reserva']."</td>";
                  echo"<td>".$reserva['fecha']."</td>";
                  echo"<td>".$reserva['precio_total']."</td>";
                }
            }
          ?>
          </tbody>
          </table>
        </div>
        <div class="col">
        <table class="table table-striped table-hover">
          <br>
          <h2>Persona registrada</h2>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Telefono</th>
              <th scope="col">Fecha Nac.</th>
              <th scope="col">Email</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
          <?php
            if(!$pasajeros){
              echo"<tr>";
              echo"<td>";
              echo"No hay pasajeros registrados";
              echo"</td>";
              echo"</tr>";
            }
            else{
                foreach($pasajeros as $pasajero){
                  echo '<input type="hidden" name="filaPasajero" value="' . htmlspecialchars(serialize($pasajero)) . '">';
                  echo"<td>".$pasajero['id_pasajero']."</td>";
                  echo"<td>".$pasajero['nombre']."</td>";
                  echo"<td>".$pasajero['telefono']."</td>";
                  echo"<td>".$pasajero['fecha_nacimiento']."</td>";
                  echo"<td>".$pasajero['email']."</td>";
                  echo'<td><a href="" class="btn btn-sm   btn-warning" ><i class="fa-solid fa-trash"></i></a></td>';
                  echo '<td><a href="Ver_reservas.php?id=' . $pasajero['id_pasajero'] . '" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
                  echo"<tr>";
                }
            }
          ?>
          </tbody>
        </table>
        </div>
      </div>
      <br>
    </div>
</body>
</html>