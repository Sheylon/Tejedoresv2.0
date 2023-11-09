<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');

    $idUsuario = $_POST['ID_USUARIO']; 
    $nombreCompleto = $_POST['NOMBRE_USUARIO'];$_POST['NOMBRE_USUARIO'];
    $correo = $_POST['USUARIO'];
    $usuario = $_POST['CORREO_USUARIO'];
    $rol = $_POST['ROL_USUARIO'];
    $contrasena = $_POST['contrasena'];

    $usuario = new Usuario($idUsuario, $nombreCompleto, $correo, $usuario, $rol, $contrasena);
    modificarUsuario($usuario);
    
    header("Location:../../vistas/verPerfil");