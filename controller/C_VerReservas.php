<?php
    require_once('../model/M_VerReservas.php');
    require_once('../model/conexion.php');

    $reservita = new Reservas();
    $reservas = $reservita->getReserva();
?>