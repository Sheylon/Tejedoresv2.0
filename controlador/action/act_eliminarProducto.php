<?php

session_start();
require_once (__DIR__ . "/../mdb/mdbProductos.php");

$idProducto = $_POST['idProducto'];

$resultado = borrarProducto($idProducto);

header('Location: ../../vistas/verProductos.php');
?>