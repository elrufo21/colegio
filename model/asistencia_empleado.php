<?php 
include_once "cn.php";

class asistencia_empleado extends cn {
    var $id_asistencia_empleado;
    var $id_empleado;
    var $asistencia;
    var $fecha;
    var $nro_documento;

    public function create(){
        $query = "INSERT INTO asistencia_empleado VALUES(0,'$this->id_empleado','$this->asistencia',now())";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function read(){
        $query = "SELECT a.*,e.nombres,e.apellido_paterno,e.apellido_materno FROM asistencia_empleado a INNER JOIN empleado e 
        ON a.id_empleado=e.id_empleado";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function update(){
        $query  = "UPDATE asistencia_empleado SET asistencia='$this->asistencia' WHERE id_empleado = '$this->asistencia'";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function consult(){
        $query = "SELECT * FROM asistencia_empleado WHERE id_asistencia_empleado = '$this->id_asistencia_empleado'";
        $rs = mysqli_query($this->f_cn(), $query);
        if ($fila = mysqli_fetch_array($rs)) {
            $this->id_asistencia_empleado=$fila['id_asistencia_empleado'];
            $this->asistencia = $fila['asistencia_empleado'];
            $this->id_empleado=$fila['id_empleado'];
            $this->fecha=$fila['fecha'];

        }
    }
    public function consultDNI(){
        $query = "SELECT id_empleado,nro_documento FROM empleado WHERE nro_documento='$this->nro_documento'";
        $rs = mysqli_query($this->f_cn(), $query);
        if ($fila = mysqli_fetch_array($rs)) {
            $this->id_empleado=$fila['id_empleado'];
            $this->nro_documento=$fila['nro_documento'];
        }
        mysqli_close($this->f_cn());

    }

}

?>