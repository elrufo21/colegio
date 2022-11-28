<?php 
include_once "../../model/asistencia_empleado.php";
include_once "../../model/empleado.php";

$obj_asistencia_empleado=new asistencia_empleado();
$obj_asistencia_empleado->id_empleado=$_REQUEST['id'];
$obj_asistencia_empleado->consult();

$obj_empleado = new Empleado();

?>

<div class="row">
    <input type="hidden" name="id" id="id" value="<?php echo $obj_asistencia_empleado->id_asistencia_empleado; ?>">
    <div class="col-4">
        <label for="txt_name">DNI <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="number" class="form-control valid validText" id="txt_dni" name="txt_dni" value=""/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Contraseña<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_contra" name="txt_contra" value=""/>
        </div>
    </div>
    
