<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');

    $nombreCompleto = $_POST['NOMBRE_USUARIO'];
    $correo = $_POST['USUARIO'];
    $usuario = $_POST['CORREO_USUARIO'];
    $rol = $_POST['ROL_USUARIO'];
    $contrasena = $_POST['contrasena'];

    // Crear una instancia de la clase Usuario
    $usuario = new Usuario(null, $nombreCompleto, $correo, $usuario, $rol, $contrasena);
    modificarUsuario($usuario);
    
    header("Location:../../vistas/verPerfil");