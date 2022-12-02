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
            <input type="number" class="form-control valid validNumber" id="txt_doc" name="txt_doc" max="99999999" value="<?php echo $obj_alumnos->numero_documento; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Fecha de Nacimiento<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="date" class="form-control valid " id="txt_nacimiento" name="txt_nacimiento"  value="<?php echo $obj_alumnos->fecha_nacimiento; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Genero<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <select class="form-control select_select" name="txt_genero" id="txt_genero">
                <option value="0" >Seleccionar</option>
                <option value="Masculino" <?php if($obj_alumnos->genero=="Masculino"){echo "Selected";} ?> >Masculino</option>
                <option value="Femenino" <?php if($obj_alumnos->genero=="Femenino"){echo "Selected";} ?>>Femenino</option>
            </select>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Direccion<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid ValidTextSpecial" id="txt_direccion" name="txt_direccion" value="<?php echo $obj_alumnos->direccion; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Email<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validEmail" id="txt_email" name="txt_email" value="<?php echo $obj_alumnos->email; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Grado<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <select class="form-control select_select" name="txt_grado" id="txt_grado">
                <option value="0" >Seleccionar</option>
                <option value="1" <?php if($obj_alumnos->grado=="1"){echo "Selected";} ?> >Primero</option>
                <option value="2" <?php if($obj_alumnos->grado=="2"){echo "Selected";} ?>>Segundo</option>
                <option value="3" <?php if($obj_alumnos->grado=="3"){echo "Selected";} ?> >Tercero</option>
                <option value="4" <?php if($obj_alumnos->grado=="4"){echo "Selected";} ?>>Cuarto</option>
                <option value="5" <?php if($obj_alumnos->grado=="5"){echo "Selected";} ?> >Quinto</option>
            </select>
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
    <div class="col-12">
            <center><div class="card card-outline card-success"><strong>Datos del apoderado</strong></div></center>
    </div> 
    <input type="hidden" name="id" id="id" value="<?php echo $obj_alumnos->id_alumno; ?>">
    <div class="col-4">
        <label for="txt_name">Nombres<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_apoderado_nombre" name="txt_apoderado_nombre" value=""/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Paterno<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_apoderado_ap_pa" name="txt_apoderado_ap_pa" value=""/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Materno<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_apoderado_ap_ma" name="txt_apoderado_ap_ma" value=""/>
        </div>
    </div>
   
    <div class="col-4">
        <label for="txt_name">Tipo de Documento<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <select class="form-control select_select" name="txt_apoderado_tp_doc" id="txt_apoderado_tp_doc">
                <option value="0" >Seleccionar</option>
                <option value="1" >DNI</option>
                <option value="2" >Carne de Extranjeria</option>
            </select>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de Documento<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validNumber" id="txt_apoderado_nro_doc" name="txt_apoderado_nro_doc" value=""/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Celular<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validNumber" id="txt_apoderado_cel" name="txt_apoderado_cel" value=""/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Parentezco<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_apoderado_par" name="txt_apoderado_par" value=""/>
        </div>
    </div>
</div>
<script src="view/js/valid.js"></script>
<script>
    fntValidText();
    fntValidTextSpecial();
    fntValidEmail();
    fntValidNumber();
</script>