<?php 
include_once "../../model/asistencia_empleado.php";

$asistencia_empleado=new asistencia_empleado();
$asistencia_empleado->id_empleado=$_REQUEST['id'];
$asistencia_empleado->consult();

?>

<div class="row">
    <input type="hidden" name="id" id="id" value="<?php echo $asistencia_empleado->id_asistencia_empleado; ?>">
    <div class="col-4">
        <label for="txt_name">Empleado <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_nombres" name="txt_nombres" value="<?php echo $asistencia_empleado->id_empleado; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Asistencia<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_ap_pat" name="txt_ap_pat" value="<?php echo $asistencia_empleado->asistencia; ?>"/>
        </div>
    </div>
    
