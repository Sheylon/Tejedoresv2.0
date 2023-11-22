<?php
session_start();
require_once(__DIR__ . "/../../modelo/entidad/Productos.php");  
require_once (__DIR__.'/../mdb/mdbProducto.php'); 

if($_SESSION['ROL_USUARIO'] == "Vendedor"){

    $idusuario = $_SESSION['ID_USUARIO'];
    $_SESSION['PRODUCTOS'] = leerProductosVendedor($idusuario);

}else{
    $_SESSION['PRODUCTOS'] = leerProductos();
}

?>