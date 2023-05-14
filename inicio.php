<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="inicio.php" class="form-inline">

        <label for="ruta">Ruta</label>
        <select class="form-control" name="ruta">
            <option>Apartadó - Medellín</option>
            <option>Apartadó - Turbo</option>
            <option>Turbo - Apartadó</option>
            <option>Turbo - Medellín</option>
            <option>Medellín - Turbo</option>
            <option>Medellín - Apartadó</option>
        </select>
        <input type="submit" value="enviar" class="btn btn-success" name="boton">

    </form>
    <?php

    if (isset($_POST['boton'])) {
        include("conex.php");
        $ruta = $_POST[$id];
        $resultados = mysqli_query($conexion, "SELECT * FROM $tablavuelos WHERE ruta = '$ruta'");
        if (mysqli_num_rows($resultados) > 0) {
            echo "
                <table>
                    <tr>
                        <th>Id vuelo</th>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Hora vuelo</th>
                        <th>Fecha vuelo</th>
                        <th>Tarifa</th>
                    </tr>";
            while ($consulta = mysqli_fetch_array($resultados)) {
                echo "
                    <tr>
                        <td>{$consulta['id_vuelo']}</td>
                        <td>{$consulta['origen']}</td>
                        <td>{$consulta['destino']}</td>
                        <td>{$consulta['hora_vuelo']}</td>
                        <td>{$consulta['fecha_vuelo']}</td>
                        <td>{$consulta['tarifa']}</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron vuelos para la";}
        }