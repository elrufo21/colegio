<?php 
session_start();

ini_set('date.timezone','America/Lima');
include_once "../../model/asistencia_profesor.php";
include_once "../../model/profesores.php";

$obj_asistencia_profesor=new asistencia_profesor();
$obj_asistencia_profesor->id_asistencia_profesor=$_REQUEST['id'];
$obj_asistencia_profesor->consult();
$id = $_SESSION['id'];

$obj_profesor = new profesores();
$obj_profesor->numero_documento=$_SESSION['documento'];
$obj_profesor->consultDNI();
echo $obj_profesor->apellido_materno;
echo date("H:i:s");


?>

<div class="row">
    <input type="hidden" name="id" id="id" value="<?php echo $obj_asistencia_profesor->id_asistencia_profesor; ?>">
    <input type="hidden" name="id_profesor" id="id_profesor" value="<?php echo $obj_profesor->id_profesor; ?>">
    <div class="col-4">
        <label for="txt_name">Usuario <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input disabled type="text" class="form-control valid validText" id="" name="" value="<?php echo $obj_profesor->nomrbes." ".$obj_profesor->apellido_paterno;  ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Hora <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input disabled type="text" class="form-control valid validText" id="txt_hora_ingreso" name="txt_hora_ingreso" value="<?php  echo date("H:i:s"); ?>"/>
        </div>
    </div>
   

</div>
    
