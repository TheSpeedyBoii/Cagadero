<?php
  require_once('../controller/C_consultas.php');
  require_once '../controller/validar_sesion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos Disponibles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/consulta.css">
</head>
<body>
    <?php
    require_once('header.php')
    ?>
    <table class="table">
      <h2>Vuelos Encontrados</h2>
  <thead>
    <tr>
      <th scope="col">Vuelo</th>
      <th scope="col">Ruta</th>
      <th scope="col">Fecha Salida</th>
      <th scope="col">Fecha Llegada</th>
      <th scope="col">Hora Salida</th>
      <th scope="col">Hora Llegada</th>
      <th scope="col">Estado</th>
      <th scope="col">Asientos</th>
      <th scope="col">Precio</th>
      <th scope="col">Reservar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if(!$vuelos){
        echo"<tr>";
        echo"<td>";
        echo"No hay vuelos para esta fecha";
        echo"</td>";
        echo"</tr>";
      }else{
        foreach($vuelos as $vuelo){
          echo'<form action="pasajero.php" method="get">';
          echo"<tr>";
          echo"<td>".$vuelo['codigo_vuelo']."</td>";
          echo"<td>".$vuelo['ruta']."</td>";
          echo"<td>".$vuelo['fecha_salida']."</td>";
          echo"<td>".$vuelo['fecha_llegada']."</td>";
          echo"<td>".$vuelo['hora_salida']."</td>";
          echo"<td>".$vuelo['hora_llegada']."</td>";
          echo"<td>".$vuelo['estado']."</td>";
          echo"<td>".$vuelo['asientos_disponibles']."</td>";
          echo "<td>COP " . number_format($vuelo['precio'], 0, ',', '.') . "</td>";
          echo '<td><input class="btn-buscar" type="submit" name="reserva_btn" value="✔"></td>';
          echo '<input type="hidden" name="fila" value="' .                                                                                                                                               htmlspecialchars(serialize($vuelo)) . '">';
          echo'</form>';
        }
      }
    ?>
  </tbody>
</table>
</body>
</html>