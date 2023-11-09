<?php
    
    session_start();
    require_once(__DIR__ . "/../../modelo/entidad/Usuario.php");
    require_once (__DIR__.'/../mdb/mdbUsuario.php');

    $idUsuario = $_POST['ID_USUARIO']; 
    $nombre_completoo = $_POST['NOMBRE_USUARIO'];
    $usuario = $_POST['CORREO_USUARIO'];
    $correo = $_POST['USUARIO'];
    $rol = $_POST['ROL_USUARIO'];
    $contrasena = $_POST['CONTRASENA_USUARIO'];

    $usuario = new Usuario($idUsuario, $nombre_completo, $correo, $usuario, $rol, $contrasena);
    modificarUsuario($usuario);
    
    header("Location:../../vistas/verPerfil");