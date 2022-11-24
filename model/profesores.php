<?php 
include_once "cn.php";
class profesores extends cn{
    var $id_profesor;
    var $nomrbes;
    var $apellido_paterno;
    var $apellido_materno;
    var $numero_documento;
    var $fecha_nacimiento;
    var $direccion;
    var $email;
    var $foto;
    var $curricullum;
    var $curso;
    var $nro_celular;
    var $passwrd;
    var $estado;
    var $fecha_registro;
    var $fecha_actualiza;
    

    public function create(){
        $query = "INSERT INTO profesores";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function read(){
        $query = "SELECT * FROM profesores";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function update(){
        $query = "UPDATE profesores SET nombres='$this->nombres',apellido_paterno='$this->apellido_paterno',apellido_materno='$this->apellido_materno'
        ,direccion='$this->direccion',email='$this->email',foto='$this->foto',nro_celular='$this->nro_celular' WHERE id_profesor = '$this->id_profesor'";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }
    public function consult(){
        $query = "SELECT * FROM profesores WHERE id_profesor = '$this->profesor'" ;
        $rs = mysqli_query($this->f_cn(), $query);
        if ($fila = mysqli_fetch_array($rs)) {
            $this->id_profesor = $fila['id_profesor'];
            $this->nomrbes = $fila['nomrbes'];
            $this->apellido_paterno = $fila['apellido_paterno'];
            $this->apellido_materno = $fila['apellido_materno'];
            $this->numero_documento = $fila['numero_documento'];
            $this->fecha_nacimiento = $fila['fecha_nacimiento'];
            $this->direccion = $fila['direccion'];
            $this->email = $fila['email'];
            $this->foto = $fila['foto'];
            $this->curricullum = $fila['curricullum'];
            $this->curso = $fila['curso'];
            $this->nro_celular = $fila['nro_celular'];
            $this->passwrd = $fila['passwrd'];
            $this->estado = $fila['estado'];
            $this->fecha_registro = $fila['fecha_registro'];
            $this->fecha_actualiza = $fila['fecha_actualiza'];


        }
        mysqli_close($this->f_cn());
    }
}

?>