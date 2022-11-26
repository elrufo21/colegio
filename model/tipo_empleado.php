<?php 
require_once "cn.php";
class tipo_empleado extends cn{
    var $id_tipo_empleado;
    var $tipo_empleado;
    var $estado;
    var $fecha_registro;
    var $fecha_actualiza;

    public function combo(){
        $query = "SELECT * FROM tipo_empleado WHERE estado = 1";
        $rs = mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }

}


?>