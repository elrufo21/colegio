<?php
session_start();
include_once "../../../model/user.php";
$obj_user = new user();


$user_name = $_REQUEST['username'];
$password = $_REQUEST['password'];
if ($user_name == "" || $password == "") {
    echo "false_datos";
    die();
} else {
    $obj_user->consult("nombre_usuario = '$user_name'");
    if ($obj_user->nombre_usuario == $user_name && $obj_user->dni==$password) {
        $_SESSION['id']= $obj_user->id_user;
        $_SESSION['nombres']=$obj_user->nombres." ".$obj_user->apellido_paterno;
        $_SESSION['email']=$obj_user->email;
        $_SESSION['cumpleaños']=$obj_user->nacimiento;
        $_SESSION['rango']=$obj_user->rango;
        echo "true";

    } else {
        echo "false";
   
    }
}
?>
