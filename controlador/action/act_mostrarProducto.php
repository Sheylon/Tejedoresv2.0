<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbProductos.php'); 

    if($_SESSION['ROL_USUARIO'] == "Vendedor"){

        $idusuario = $_SESSION['ID_USUARIO'];
        $_SESSION['PRODUCTOS'] = leerProductosVendedor($idusuario);
        header('Location: ../../vistas/MostrasProductos.php');

    }else{
        $_SESSION['PRODUCTOS'] = leerProductos();
        header('Location: ../../vistas/MostrasProductos.php');
    }

    header('Location: ../../vistas/MostrasProductos.php');
?>