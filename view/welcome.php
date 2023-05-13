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
        <h2 class="titulo">Vuelos</h2>
        <div class="search">
            <select>
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <input type="date">
            <input type="submit">
        </div>
        <div class="sites">
            <div class="site">
                <div class="site-img"><img src="images/landing/Cartagena.jpg" alt=""></div>
                <h2>Cartagena</h2>
                <p>CARTAGENA</p>
            </div>
            <div class="site">
                <div class="site-img"><img src="images/landing/Medellin.jpg" alt=""></div>
                <h2>Medellin</h2>
                <p>METRALLO</p>
            </div>
            <div class="site">
                <div class="site-img"><img src="images/landing/Turbo.jpg" alt=""></div>
                <h2>Turbo</h2>
                <p>TURBOKISTAN</p>
            </div>
        </div>
    </section>
</body>
</html>