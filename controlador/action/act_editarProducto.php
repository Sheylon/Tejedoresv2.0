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

header("Location: ../../vistas/verProductos.php");
?>
