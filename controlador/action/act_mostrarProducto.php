<?php
// act_mostrarProducto.php

// Verificar si se proporcionó el ID del producto en el formulario
if (isset($_GET['idProducto'])) {
    $idProducto = $_GET['idProducto'];

    // Puedes realizar operaciones adicionales con el ID del producto si es necesario

    // Redirigir a la página de detalles del producto con el ID
    header("Location: verProducto.php?idProducto=$idProducto");
    exit;
} else {
    // Manejar el caso en que no se proporcionó el ID del producto
    echo "Error: No se proporcionó un ID de producto.";
}
?>
