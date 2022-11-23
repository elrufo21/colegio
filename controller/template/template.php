<?php 
class ViewController {
    //Paginas 
    public function template(){
        include "view/template.php";
    }
    public function empleados(){
        include "view/empleados.php";
    }

    




    public function tipo_empleados(){
        include "view/tipo_empleados.php";
    }
    public function session(){
        if(!isset($_SESSION['nombres'])){
            header("Location: view/modules/login/login.php");
        }
    }
}
?>