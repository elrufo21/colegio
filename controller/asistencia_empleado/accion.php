<?php 
include_once "../../model/empleado.php";
$obj_profesores = new Empleado();

$obj_empleado->id_alumno = $_REQUEST['id'];
$obj_empleado->nombres = $_REQUEST['txt_nombres'];
$obj_empleado->apellido_paterno = $_REQUEST['txt_ap_paterno'];
$obj_empleado->apellido_materno = $_REQUEST['txt_ap_mat'];
$obj_empleado->numero_documento = $_REQUEST['txt_doc'];
$obj_empleado->fecha_nacimiento = $_REQUEST['txt_nacimiento'];
$obj_empleado->genero = $_REQUEST['txt_genero'];
$obj_empleado->direccion = $_REQUEST['txt_direccion'];
$obj_empleado->email = $_REQUEST['txt_email'];
$obj_empleado->grado = $_REQUEST['txt_grado'];
$obj_empleado->foto = $_REQUEST['txt_foto'];
$obj_empleado->constancia_estudios = $_REQUEST['txt_cs_est'];
$obj_empleado->id_empleado= $_REQUEST['txt_apoderado'];

if($_REQUEST["id"]>0){
    $obj_empleado->id_empleado=$_REQUEST['id'];
    $obj_empleado->update();
    echo "true";
    die();
}else{
    $obj_empleado->create();
    echo "true";
    die();
}

?>