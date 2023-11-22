<?php

require_once(__DIR__."/../../modelo/dao/categoriaProductoDAO.php");

function leerCategorias() {
    $dao = new CategoriaProductoDAO();
    $categorias = $dao->leerCategorias();
    return $categorias;
}

function insertarCategoria($nombre, $descripcion) {
    $dao = new CategoriaProductoDAO();
    $categoria = new CategoriaProducto(null, $nombre, $descripcion); // El idCategoriaProducto generalmente es autoincremental y se asignará automáticamente en la base de datos
    $resultado = $dao->insertarCategoria($categoria);
    return $resultado;
}




function modificarCategoria($categoria) {
    $dao = new CategoriaProductoDAO();
    $resultado = $dao->modificarCategoria($categoria);
    return $resultado;
}

function borrarCategoria($id) {
    $dao = new CategoriaProductoDAO();
    $res = $dao->borrarCategoria($id);
    return $res;
}

?>

