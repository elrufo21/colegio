<?php 
session_start();
include_once "../../model/asistencia_empleado.php";
ini_set('date.timezone','America/Lima');
$obj_asistencia_empleado=new asistencia_empleado();

$hora_ingreso = date("H:i:s");
$id_empleado = $_REQUEST['id_empleado'];

$obj_asistencia_empleado->id_empleado=$id_empleado;
$obj_asistencia_empleado->hora_ingreso=date("H:i:s");
$obj_asistencia_empleado->asistencia="Presente";

if( $obj_asistencia_empleado->consultDia(date("Y-m-d"))>0){
    echo "error";
    die();
}
if ($_REQUEST["id"] == 0) {
    $obj_asistencia_empleado->create();
    echo "true";
    die();
}




?>