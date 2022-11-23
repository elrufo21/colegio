<?php 
include_once "cn.php";

class user extends cn{
    var $id_user;   
    var $nombres;
    var $apellido_paterno;
    var $apellido_materno;
    var $dni;
    var $email;
    var $celular;
    var $nacimiento;
    var $fecha_registro;
    var $fecha_actualiza;
    var $estado;
    var $rango;
    var $nombre_usuario;

    public function create(){
        $query="INSERT INTO users VALUES()";
        $rs=mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }

    function read(){
        $query = "SELECT * FROM users";
        $rs = mysqli_query($this->f_cn(),$query);
        mysqli_close($this->f_cn());
        return $rs;
    }

    function consult($consult){
        $query="SELECT * FROM users WHERE $consult";
        $rs = mysqli_query($this->f_cn(),$query);
        if($fila=mysqli_fetch_array($rs)){
            $this->id_user=$fila["id"];
            $this->nombres=$fila["nombres"];
            $this->apellido_paterno=$fila["apellido_paterno"];
            $this->apellido_materno=$fila["apellido_materno"];
            $this->dni=$fila["dni"];
            $this->email=$fila["email"];
            $this->celular=$fila["celular"];
            $this->nacimiento=$fila["nacimiento"];
            $this->fecha_registro=$fila["fecha_registro"];
            $this->fecha_actualiza=$fila["fecha_actualiza"];
            $this->estado=$fila["estado"];
            $this->rango=$fila["rango"];
            $this->nombre_usuario=$fila["nombre_usuario"];
        }
        mysqli_close($this->f_cn());
    }

}

?>