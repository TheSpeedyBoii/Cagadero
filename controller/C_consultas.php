<?php
    require_once('../model/M_Vuelos.php');
    require_once('../model/conexion.php');

    $vuelito = new Vuelo();
    $vuelos = $vuelito->getVuelos();
?>