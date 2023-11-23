<?php

session_start();

require_once(__DIR__ . "/../../modelo/entidad/Producto.php");
require_once(__DIR__ . "/../../modelo/entidad/Foto.php");
require_once(__DIR__ . "/../mdb/mdbProductos.php");

if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['unidades_disponibles'],
    $_POST['valor_unidad'], $_POST['idcategoriaproducto'],  $_POST['id_talla'])) {

    $nombreProducto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $unidadesDisponibles = $_POST['unidades_disponibles'];
    $valorUnidad = $_POST['valor_unidad'];
    $idTipoProducto = $_POST['idcategoriaproducto'];
    $idTalla = $_POST['id_talla'];
    $idusuario =  $_SESSION['ID_USUARIO'];
    
    $producto = new Producto( null, $nombreProducto, $descripcion, $unidadesDisponibles, $valorUnidad, $idTipoProducto, $idTalla, $idusuario);

    $resultado = insertarProducto($producto);

    if ($resultado != 0) {

        $idProducto = buscarProductoPorNombre($nombreProducto);
        $urlFOto = generarURL();

        $foto = new Foto(NULL, $urlFOto, $idProducto);

        insertarFoto($foto);

    }


    if ($resultado) {
    
        header("Location:../../vistas/index.php?msg=Producto registrado exitosamente");
    } else {
    
        header("Location: ../../vista/editarPerfil.php?msg=Error en el registro del producto");
    }
} else {
    
    // header("Location: ../../vista/RegistroProducto.php?msg=Datos de registro incompletos");
}



function generarURL(){
       
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['image']['name'];
        $tipoArchivo = $_FILES['image']['type'];
        $archivoTemporal = $_FILES['image']['tmp_name'];

        $directorioDestino = __DIR__ . "/../../Fotos"; 
        // Genera un nombre de archivo único para evitar sobrescribir archivos existentes
        $archivoDestino = $directorioDestino . uniqid() . '/' . basename($nombreArchivo);
        
        // Verifica si el archivo tiene un formato de imagen válido
        $tipoArchivo = strtolower(pathinfo($archivoDestino, PATHINFO_EXTENSION));
        $formatosPermitidos = array("jpg", "jpeg", "png");
        
        if (in_array($tipoArchivo, $formatosPermitidos)) {
            // Mueve el archivo subido al directorio de destino
            if (move_uploaded_file($archivoTemporal, $archivoDestino)) {
                // Subida de archivo exitosa.
                return $archivoTemporal;
                header("Location: ../../vistas/index.php?msg=Foto subida exitosamente");
                exit();
            } else {
                // Error al mover el archivo, redirige con un mensaje de error
                header("Location: ../../vistas/RegistroProducto.php?msg=Error al subir la foto");
                exit();
            }
        } else {
            // Formato de archivo no válido, redirige con un mensaje de error
            header("Location: ../../vistas/RegistroProducto.php?msg=Formato de archivo no válido");
            exit();
        }
    }  
              
}


?>