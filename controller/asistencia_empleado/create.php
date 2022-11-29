<?php 
session_start();

ini_set('date.timezone','America/Lima');
include_once "../../model/asistencia_empleado.php";
include_once "../../model/empleado.php";

$obj_asistencia_empleado=new asistencia_empleado();
$obj_asistencia_empleado->id_asistencia_empleado=$_REQUEST['id'];
$obj_asistencia_empleado->consult();
$id = $_SESSION['id'];
$obj_empleado = new Empleado();
$obj_empleado->nro_documento=$_SESSION['documento'];
$obj_empleado->consultDNI();
echo $obj_empleado->nombres;
echo date("H:i:s");


?>

<div class="row">
    <input type="hidden" name="id" id="id" value="<?php echo $obj_asistencia_empleado->id_asistencia_empleado; ?>">
    <input type="hidden" name="id_empleado" id="id_empleado" value="<?php echo $obj_empleado->id_empleado; ?>">
    <div class="col-4">
        <label for="txt_name">Usuario <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input disabled type="text" class="form-control valid validText" id="" name="" value="<?php echo $obj_empleado->nombres." ".$obj_empleado->apellido_paterno;  ?>"/>
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
    
