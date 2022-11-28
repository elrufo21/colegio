<?php 
include_once "../../model/profesor.php";
$obj_profesores = new profesores();

$obj_profesores->id_alumno = $_REQUEST['id'];
$obj_profesores->nombres = $_REQUEST['txt_nombres'];
$obj_profesores->apellido_paterno = $_REQUEST['txt_ap_paterno'];
$obj_profesores->apellido_materno = $_REQUEST['txt_ap_mat'];
$obj_profesores->numero_documento = $_REQUEST['txt_doc'];
$obj_profesores->fecha_nacimiento = $_REQUEST['txt_nacimiento'];
$obj_profesores->genero = $_REQUEST['txt_genero'];
$obj_profesores->direccion = $_REQUEST['txt_direccion'];
$obj_profesores->email = $_REQUEST['txt_email'];
$obj_profesores->grado = $_REQUEST['txt_grado'];
$obj_profesores->foto = $_REQUEST['txt_foto'];
$obj_profesores->constancia_estudios = $_REQUEST['txt_cs_est'];
$obj_profesores->id_apoderado= $_REQUEST['txt_apoderado'];

if($_REQUEST["id"]>0){
    $obj_profesores->id_profesor=$_REQUEST['id'];
    $obj_profesores->update();
    echo "true";
    die();
}else{
    $obj_profesores->create();
    echo "true";
    die();
}

?>