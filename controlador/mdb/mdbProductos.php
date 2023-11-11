<?php

function buscarProductoPorId($id) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductosDAO();
    $producto = $dao->buscarProductoPorId($id);
    return $producto;
}

function leerProductos() {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductosDAO();
    $productos = $dao->leerProductos();
    return $productos;
}

function insertarProducto($producto) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductosDAO();
    $resultado = $dao->insertarProducto($producto);
    return $resultado;
}

function modificarProducto($producto) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductosDAO();
    $resultado = $dao->modificarProducto($producto);
    return $resultado;
}

function borrarProducto($id) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductosDAO();
    $res = $dao->borrarProducto($id);
    return $res;
}
?>
