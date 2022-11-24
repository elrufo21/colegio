<?php 
include_once "../../model/alumnos.php";
$obj_alumnos = new alumno();

$obj_alumnos->id_alumno = $_REQUEST['id'];
$obj_alumnos->nombres = $_REQUEST['txt_nombres'];
$obj_alumnos->apellido_paterno = $_REQUEST['txt_ap_paterno'];
$obj_alumnos->apellido_materno = $_REQUEST['txt_ap_mat'];
$obj_alumnos->numero_documento = $_REQUEST['txt_doc'];
$obj_alumnos->fecha_nacimiento = $_REQUEST['txt_nacimiento'];
$obj_alumnos->genero = $_REQUEST['txt_genero'];
$obj_alumnos->direccion = $_REQUEST['txt_direccion'];
$obj_alumnos->email = $_REQUEST['txt_email'];
$obj_alumnos->grado = $_REQUEST['txt_grado'];
$obj_alumnos->foto = $_REQUEST['txt_foto'];
$obj_alumnos->constancia_estudios = $_REQUEST['txt_cs_est'];
$obj_alumnos->id_apoderado= $_REQUEST['txt_apoderado'];

if($_REQUEST["id"]>0){
    $obj_alumnos->id_alumno=$_REQUEST['id'];
    $obj_alumnos->update();
    echo "true";
    die();
}else{
    $obj_alumnos->create();
    echo "true";
    die();
}

?>