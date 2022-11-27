<?php 
include_once "cn.php";

class asistencia_profesor extends cn {
    var $id_asistencia_profesor;
    var $id_profesor;
    var $asistencia;
    var $fecha;

    public function create(){
        $query = "INSERT INTO asistencia_profesor VALUES(0,'$this->id_profesor','$this->asistencia',now())";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function read(){
        $query = "SELECT a.*,e.nombres,e.apellido_paterno,e.apellido_materno FROM asistencia_profesor a INNER JOIN profesor e 
        ON a.id_profesor=e.id_profesor";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function update(){
        $query  = "UPDATE asistencia_profesor SET asistencia='$this->asistencia' WHERE id_asistencia = '$this->asistencia'";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function consult(){
        $query = "SELECT * FROM asistencia_profesor WHERE id_asistencia_profesor = '$this->id_asistencia_profesor'";
        $rs = mysqli_query($this->f_cn(), $query);
        if ($fila = mysqli_fetch_array($rs)) {
            $this->id_asistencia_profesor=$fila['asistencia_profesor'];
            $this->asistencia = $fila['asistencia_profesor'];
            $this->id_profesor=$fila['id_profesor'];
            $this->fecha=$fila['fecha'];

        }
    }

}

?>