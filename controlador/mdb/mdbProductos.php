<?php

function buscarProductoPorId($id) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductoDAO();
    $producto = $dao->buscarProductoPorId($id);
    return $producto;
}

function leerProductos() {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductoDAO();
    $productos = $dao->leerProductos();
    return $productos;
}

function insertarProducto($producto) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductoDAO();
    $resultado = $dao->insertarProducto($producto);
    return $resultado;
}

function modificarProducto($producto) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductoDAO();
    $resultado = $dao->modificarProducto($producto);
    return $resultado;
}

function borrarProducto($id) {
    require_once(__DIR__."/../../modelo/dao/productoDAO.php");
    $dao = new ProductoDAO();
    $res = $dao->borrarProducto($id);
    return $res;
}
?>
<?php

function buscarCategoriaPorId($id) {
    require_once(__DIR__."/../../modelo/dao/categoriaProductoDAO.php");
    $dao = new CategoriaProductoDAO();
    $categoria = $dao->buscarCategoriaPorId($id);
    return $categoria;
}

function leerCategorias() {
    require_once(__DIR__."/../../modelo/dao/categoriaProductoDAO.php");
    $dao = new CategoriaProductoDAO();
    $categorias = $dao->leerCategorias();
    return $categorias;
}

function insertarCategoria($categoria) {
    require_once(__DIR__."/../../modelo/dao/categoriaProductoDAO.php");
    $dao = new CategoriaProductoDAO();
    $resultado = $dao->insertarCategoria($categoria);
    return $resultado;
}

function modificarCategoria($categoria) {
    require_once(__DIR__."/../../modelo/dao/categoriaProductoDAO.php");
    $dao = new CategoriaProductoDAO();
    $resultado = $dao->modificarCategoria($categoria);
    return $resultado;
}

function borrarCategoria($id) {
    require_once(__DIR__."/../../modelo/dao/categoriaProductoDAO.php");
    $dao = new CategoriaProductoDAO();
    $res = $dao->borrarCategoria($id);
    return $res;
}
?>
