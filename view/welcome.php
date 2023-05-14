<?php
  require_once('../controller/C_consultas.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/welcomeStyles.css">
</head>
<body class="background">
    <?php
    require_once 'header.php';
    ?>
    <section>
        <div class="buscador">
        <h2 class="titulo">Busca tu vuelo</h2>
        <div class="search">
        <form method="POST" action="consulta_vuelos.php" class="form-inline">
            <select class="form-control" name="ruta">
            <?php 
                foreach($rutas as $ruta){
                    $id = $ruta['id_ruta'];
                    echo"<option value='$id'>".$ruta['descripcion']."</option>";
                    }
            ?>
            </select>
            <input type="date" name="fecha">
            <input class="btn-buscar" type="submit" name="buscar_ruta">
            </form>
        </div>
        </div>
        <div class="sites">
            <div class="site">
                <div class="site-img"><img src="images/landing/Cartagena.jpg" alt=""></div>
                <h2>Cartagena</h2>
                <p>Descubre la belleza de Cartagena. Playas impresionantes, una historia fascinante y cultura vibrante te esperan.</p>
            </div>
            <div class="site">
                <div class="site-img"><img src="images/landing/Medellin.jpg" alt=""></div>
                <h2>Medellin</h2>
                <p>Descubre Medellín, una ciudad llena de vida en Colombia. Disfruta de su clima primaveral, sus impresionantes vistas y su vibrante cultura.</p>
            </div>
            <div class="site">
                <div class="site-img"><img src="images/landing/Turbo.jpg" alt=""></div>
                <h2>Turbo</h2>
                <p>Descubre Turbo en la costa caribeña de Colombia: playas paradisíacas, selva tropical y cultura local te esperan en esta joya escondida.</p>
            </div>
        </div>
    </section>
</body>
</html>