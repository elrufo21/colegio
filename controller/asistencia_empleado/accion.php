<?php 
include_once "../../model/empleado.php";
$obj_empleado = new Empleado();

$dni = $_REQUEST["txt_dni"];
$pass= $_REQUEST["txt_pass"];

$obj_empleado->nro_documento = $dni;


?>