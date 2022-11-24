<?php
include_once "../../model/alumnos.php";
$obj_alumnos = new alumno();
$obj_alumnos->id_alumno = $_REQUEST['id'];
$rs = $obj_alumnos->consult();
?>
<div class="row">
    <input type="hidden" name="id" id="id" value="<?php echo $obj_alumnos->id_alumno; ?>">
    <div class="col-4">
        <label for="txt_name">Nombres <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_nombres" name="txt_nombres" value="<?php echo $obj_alumnos->nombres; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Paterno <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_ap_paterno" name="txt_ap_paterno" value="<?php echo $obj_alumnos->apellido_paterno; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Materno<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_ap_mat" name="txt_ap_mat" value="<?php echo $obj_alumnos->apellido_materno; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de documento<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="number" class="form-control valid validText" id="txt_doc" name="txt_doc" max="99999999" value="<?php echo $obj_alumnos->numero_documento; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Fecha de Nacimiento<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="date" class="form-control valid validText" id="txt_nacimiento" name="txt_nacimiento"  value="<?php echo $obj_alumnos->fecha_nacimiento; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Genero<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_genero" name="txt_genero" value="<?php echo $obj_alumnos->genero; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Direccion<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_direccion" name="txt_direccion" value="<?php echo $obj_alumnos->direccion; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Email<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_email" name="txt_email" value="<?php echo $obj_alumnos->email; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Grado<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_grado" name="txt_grado" value="<?php echo $obj_alumnos->grado; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Foto<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_foto" name="txt_foto" value="<?php echo $obj_alumnos->foto; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">constancia de estudios<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_cs_est" name="txt_cs_est" value="<?php echo $obj_alumnos->constancia_estudios; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apoderado<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_apoderado" name="txt_apoderado" value="<?php echo $obj_alumnos->id_apoderado; ?>"/>
        </div>
    </div>
</div>