<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbTalla.php");

if (isset($_POST['idProducto'], $_POST['talla'])) {
    $errMsg = '';

    $idProducto = $_POST['idProducto'];
    $talla = $_POST['talla'];

    // Lógica para insertar la talla en la base de datos
    $resultado = insertarTalla($idProducto, $talla);

    if ($resultado) {
        echo 'Talla insertada exitosamente';
    } else {
        echo 'No se pudo insertar la talla';
    }
} else {
    echo 'Parámetros faltantes';
}
?>
