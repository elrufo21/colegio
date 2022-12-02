<?php 
session_start();
include_once "../../model/asistencia_profesor.php";
ini_set('date.timezone','America/Lima');
$obj_asistencia_profesor=new asistencia_profesor();

$hora_ingreso = date("H:i:s");
$id_profesor = $_REQUEST['id_profesor'];

$obj_asistencia_profesor->id_profesor=$id_profesor;
$obj_asistencia_profesor->hora_ingreso=date("H:i:s");
$obj_asistencia_profesor->asistencia="Presente";

if( $obj_asistencia_profesor->consultDia(date("Y-m-d"))>0){
    echo "error";
    die();
}
if ($_REQUEST["id"] == 0) {
    $obj_asistencia_profesor->create();
    echo "true";
    die();
}




?>