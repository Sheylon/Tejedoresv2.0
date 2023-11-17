<?php

session_start();

require_once(__DIR__ . "/../../modelo/entidad/Producto.php");
require_once(__DIR__ . "/../mdb/mdbProductos.php");

if (
    isset($_POST['nombre_producto'], $_POST['descripcion'], $_POST['unidades_disponibles'], $_POST['valor_unidad'], $_POST['id_color'], $_POST['id_talla'], $_POST['id_foto'], $_POST['id_tipo_producto'])
) {
    $nombreProducto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $unidadesDisponibles = $_POST['unidades_disponibles'];
    $valorUnidad = $_POST['valor_unidad'];
    $idColor = $_POST['id_color'];
    $idTalla = $_POST['id_talla'];
    $idFoto = $_POST['id_foto'];
    $idTipoProducto = $_POST['id_tipo_producto'];

   
    $producto = new Producto( null, $nombreProducto, $descripcion, $unidadesDisponibles, $valorUnidad, $idColor, $idTalla, $idFoto, $idTipoProducto);

    $resultado = insertarProducto($producto);

    if ($resultado) {
       
        header("Location:../../vistas/index.php?msg=Producto registrado exitosamente");
    } else {
       
        header("Location: ../../vista/RegistroProducto.php?msg=Error en el registro del producto");
    }
} else {
    
    header("Location: ../../vista/RegistroProducto.php?msg=Datos de registro incompletos");
}