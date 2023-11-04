<?php
session_start();
include '../modelo/dao/UsuarioDAO.php';

$Correo = $_POST['Correo'];
$contrasena = $_POST['contrasena'];
$nombre = login($Correo, $contrasena);

if(($nombre) != null ){
    $_SESSION['$Usuario']=$nombre;
    header("Location:../vistas/index.php");
    exit();
} else {
    header("Location:../vistas/RegistroLogin.php");
    exit(); 
}
?>
