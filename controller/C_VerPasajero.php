<?php
    require_once('../model/M_VerReservas.php');
    require_once('../model/conexion.php');

    $pasajerito = new Reservas();
    $pasajeros = $pasajerito->getPasajero();

    if (isset($_GET['id'])) {
        $idPasajero = $_GET['id'];
        $pasajerito->eliminarPasajero($idPasajero);
    }

?>