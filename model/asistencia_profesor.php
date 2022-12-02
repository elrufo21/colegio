<?php 
include_once "cn.php";

class asistencia_profesor extends cn {
    var $id_asistencia_profesor;
    var $id_profesor;
    var $asistencia;
    var $fecha;
    var $nro_documento;
    var $hora_ingreso;
    var $hora_salida;

    public function create(){
        $query = "INSERT INTO asistencia_profesor VALUES(0,'$this->id_profesor','$this->asistencia',now(),'$this->hora_ingreso','')";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function read(){
        $query = "SELECT a.*,p.nombres,p.apellido_paterno,p.apellido_materno FROM asistencia_profesor a INNER JOIN profesores p ON
        a.id_profesor=p.id_profesor";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function update(){
        $query  = "UPDATE asistencia_profesor SET asistencia='$this->asistencia' WHERE id_profesor = '$this->id_profesor'";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function consult(){
        $query = "SELECT * FROM asistencia_profesor WHERE id_asistencia_profesor = '$this->id_asistencia_profesor'";
        $rs = mysqli_query($this->f_cn(), $query);
        if ($fila = mysqli_fetch_array($rs)) {
            $this->id_asistencia_profesor=$fila['id_asistencia_profesor'];
            $this->asistencia = $fila['asistencia_profesor'];
            $this->id_profesor=$fila['id_profesor'];
            $this->fecha=$fila['fecha'];

        }
    }
    public function consultDNI(){
        $query = "SELECT id_profesor,nro_documento FROM empleado WHERE nro_documento='$this->nro_documento'";
        $rs = mysqli_query($this->f_cn(), $query);
        if ($fila = mysqli_fetch_array($rs)) {
            $this->id_profesor=$fila['id_profesor'];
            $this->nro_documento=$fila['nro_documento'];
        }
        mysqli_close($this->f_cn());

    }
    public function consultDia($fecha){
        $query = "SELECT count(*) as contar FROM asistencia_profesor WHERE fecha='$fecha'";
        $rs = mysqli_query($this->f_cn(), $query);
        if ($fila = mysqli_fetch_array($rs)) {
            $count=$fila['contar'];
        }
        mysqli_close($this->f_cn());
        return $count;
    }

}

?>