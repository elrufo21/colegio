<?php 
include_once "../../model/empleado.php";
include_once "../../model/tipo_empleado.php";

$obj_empleado=new Empleado();
$obj_empleado->id_empleado=$_REQUEST['id'];
$obj_empleado->consult();

$obj_tipo_empelado = new tipo_empleado();
?>

<div class="row">
    <input type="hidden" name="id" id="id" value="<?php echo $obj_empleado->id_empleado; ?>">
    <div class="col-4">
        <label for="txt_name">Nombres <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_nombres" name="txt_nombres" value="<?php echo $obj_empleado->nombres; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Paterno<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_ap_pat" name="txt_ap_pat" value="<?php echo $obj_empleado->apellido_paterno; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Materno<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_ap_mat" name="txt_ap_mat" value="<?php echo $obj_empleado->apellido_materno; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de documento<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="number" class="form-control valid validText" id="txt_doc" name="txt_doc" max="99999999" value="<?php echo $obj_empleado->nro_documento; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Direccion<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_direccion" name="txt_direccion" value="<?php echo $obj_empleado->direccion; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Genero<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <select class="form-control select_select" name="slt_genero" id="slt_genero">
                <option value="0">Seleccionar</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>
    </div>
    <div class="col-4">
        <label for="slt_t_d">Tipo de empleado <i class="text-danger" title="Seleccione Tipo documento">*</i> </label>
        <label class="text-danger msj-slt_t_d"></label>
        <div class="input-group mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fab fa-product-hunt"></i></span>
        </div>
        <select class="form-control select_select" name="slt_t_d" id="slt_t_d">
            <option value="0">SELECIONAR</option>
            <?php $rs_tipo_empleado=$obj_tipo_empelado->combo();
                while($fila=mysqli_fetch_assoc($rs_tipo_empleado)){
            ?>
            <option <?php if($obj_empleado->id_tipo_empleado==$fila["id_tipo_empleado"]){ echo "selected";}?> value="<?php echo $fila["id_tipo_empleado"]?>"><?php echo $fila["tipo_empleado"]?></option>
                <?php }?>
        </select>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de Celular <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_num_cel" name="txt_num_cel" value="<?php echo $obj_empleado->nro_celular; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Email <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_email" name="txt_email" value="<?php echo $obj_empleado->email; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de cuenta <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txr_nro_cuenta" name="txr_nro_cuenta" value="<?php echo $obj_empleado->nro_cuenta; ?>"/>
        </div>
    </div>
</div>
