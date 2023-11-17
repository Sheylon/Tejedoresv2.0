<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbCategoriaProducto.php");

if (isset($_POST['nombreCategoria'], $_POST['descripcionCategoria'])) {
    $errMsg = '';
    
    // Datos enviados desde el formulario
    $nombreCategoria = $_POST['nombreCategoria'];
    $descripcionCategoria = $_POST['descripcionCategoria'];
    
    $categoriaProducto = autenticarCategoriaProducto($nombreCategoria, $descripcionCategoria);

    if ($categoriaProducto != null) { // Puede autenticar la categoría de producto
        $_SESSION['ID_CATEGORIA'] = $categoriaProducto->getIdCategoriaProducto();
        $_SESSION['NOMBRE_CATEGORIA'] = $categoriaProducto->getNombre();
        $_SESSION['DESCRIPCION_CATEGORIA'] = $categoriaProducto->getDescripcion();
        
        header('Location: ../../vistas/index.php'); // Redireccionar a la página principal
        echo 'Conectado exitosamente a la Base de Datos';
    } else { // No puede autenticar la categoría de producto
        $errMsg .= 'Nombre de categoría y descripción no encontrados';
        header('Location: ../../vistas/RegistroLogin.php');
        echo 'No se ha podido conectar a la Base de Datos';
    }
}
?>
