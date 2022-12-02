<?php 
include_once "../../model/alumnos.php";
include_once "../../model/apoderado.php";
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
$obj_alumnos->id_apoderado= $_REQUEST['txt_apoderado_nro_doc'];


$obj_apoderado=new apoderado();
$obj_apoderado->id_apoderado=$_REQUEST['id'];
$obj_apoderado->nombres=$_REQUEST['txt_apoderado_nombre'];
$obj_apoderado->apellido_paterno=$_REQUEST['txt_apoderado_ap_pa'];
$obj_apoderado->apellido_materno=$_REQUEST['txt_apoderado_ap_ma'];
$obj_apoderado->tipo_documento=$_REQUEST['txt_apoderado_tp_doc'];
$obj_apoderado->nro_documento=$_REQUEST['txt_apoderado_nro_doc'];
$obj_apoderado->celular=$_REQUEST['txt_apoderado_cel'];
$obj_apoderado->parentezco=$_REQUEST['txt_apoderado_par'];    
$obj_apoderado->dni_alumno=$_REQUEST['txt_doc'];
if($_REQUEST["id"]>0){
    $obj_alumnos->id_alumno=$_REQUEST['id'];
    $obj_alumnos->update();
    echo "true";
    die();
}else{
    $obj_alumnos->create();
    $obj_apoderado->create();
    echo "true";
    die();

}

?>