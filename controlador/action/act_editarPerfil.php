<?php
    
  session_start();
  require_once(__DIR__ . "/../../modelo/entidad/Usuario.php");
  require_once (__DIR__.'/../mdb/mdbUsuario.php');

  $idUsuario = $_POST['ID_USUARIO']; 
  $nombre_completo = $_POST['NOMBRE_USUARIO'];
  $usuario = $_POST['USUARIO'];
  $correo = $_POST['CORREO_USUARIO'];
  $rol = $_POST['ROL_USUARIO'];
  $contrasena = $_POST['CONTRASENA_USUARIO'];

  $usuario = new Usuario($idUsuario, $nombre_completo, $correo, $usuario, $rol, $contrasena);
  $ret = modificarUsuario($usuario);

    
  if($ret != 0){ 
    $_SESSION['ID_USUARIO'] = $usuario->getIdUsuario();
    $_SESSION['NOMBRE_USUARIO'] = $usuario->getNombreCompleto(); 
    $_SESSION['CORREO_USUARIO'] = $usuario->getCorreo();
    $_SESSION['USUARIO'] = $usuario->getUsuario();
    $_SESSION['ROL_USUARIO'] = $usuario->getRol();
    $_SESSION['CONTRASENA_USUARIO'] = $usuario->getContrasena();
  }
  
  header("Location:../../vistas/verPerfil.php");
  ?>
   
