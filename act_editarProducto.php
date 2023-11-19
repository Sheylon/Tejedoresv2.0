<?php
session_start();
require_once(__DIR__ . "/../../modelo/entidad/Productos.php");  
require_once (__DIR__.'/../mdb/mdbProducto.php');  

$idProducto = $_POST['idProducto'];
$nombreProducto = $_POST['nombreProducto'];
$descripcion = $_POST['descripcion'];
$unidadesDisponibles = $_POST['unidadesDisponibles'];
$valorUnidad = $_POST['valorUnidad'];
$idColor = $_POST['idColor'];
$idTalla = $_POST['idTalla'];


$idTipoProducto = $_POST['idTipoProducto'];

$producto = new Producto($idProducto, $nombreProducto, $descripcion, $unidadesDisponibles, $valorUnidad, $idColor, $idTalla, $idFoto, $idTipoProducto);
modificarProducto($producto);

header("Location: ../../vistas/verProductos.php");
?>
