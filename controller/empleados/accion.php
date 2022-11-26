<?php 
include_once "../../model/empleado.php";
$obj_empleado = new Empleado();

$obj_empleado->nombres=$_REQUEST['txt_nombres'] ;
$obj_empleado->apellido_paterno=$_REQUEST['txt_ap_pat'] ;
$obj_empleado->apellido_materno=$_REQUEST['txt_ap_mat'] ;
$obj_empleado->nro_documento=$_REQUEST['txt_doc'] ;
$obj_empleado->direccion=$_REQUEST['txt_direccion'];
$obj_empleado->genero=$_REQUEST['slt_genero'] ;
$obj_empleado->id_empleado=$_REQUEST['txt_tipo_emp'] ;
$obj_empleado->nro_celular=$_REQUEST['txt_num_cel'] ;
$obj_empleado->email=$_REQUEST['txt_email'] ;
$obj_empleado->nro_cuenta=$_REQUEST['txr_nro_cuenta'] ;
$obj_empleado->password = generatePassword(strlen($_REQUEST['txt_nombres']));

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



function generatePassword($length)
{
    $key = "";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    return $key;
}



?>