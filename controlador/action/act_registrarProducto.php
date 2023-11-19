<?php

session_start();

require_once(__DIR__ . "/../../modelo/entidad/Producto.php");
require_once(__DIR__ . "/../mdb/mdbProductos.php");

if (
    isset($_POST['nombre'], $_POST['descripcion'], $_POST['unidades_disponibles'],
     $_POST['valor_unidad'], $_POST['idcategoriaproducto'],  $_POST['id_talla'],  $_POST['id_usuario'])
) {
    $nombreProducto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $unidadesDisponibles = $_POST['unidades_disponibles'];
    $valorUnidad = $_POST['valor_unidad'];
    $idTipoProducto = $_POST['idcategoriaproducto'];
    $idTalla = $_POST['id_talla'];
    $idusuario = $_POST['id_usuario'];

   
    $producto = new Producto( null, $nombreProducto, $descripcion, $unidadesDisponibles, $valorUnidad, $idTipoProducto, $idTalla, $idusuario);

    $resultado = insertarProducto($producto);

    if ($resultado != 0) {
       
        header("Location:../../vistas/index.php?msg=Producto registrado exitosamente");
    } else {
       
        header("Location: ../../vista/editarPerfil.php?msg=Error en el registro del producto");
    }
} else {
    
    // header("Location: ../../vista/RegistroProducto.php?msg=Datos de registro incompletos");
}