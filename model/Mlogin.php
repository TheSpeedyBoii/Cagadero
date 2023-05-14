<?php
include('../controller/CtrlMain.php');
 //instacia de la clase
$usuario = new Sesion();
//ejecucion del metodo
$consulta = $usuario->validarDatos();
//$vuelosInfo = $ruta->getVuelosInfo();
$cdb = new conexion();
$personas = $cdb->getPersonas();

?>
