<?php

session_start();


    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['foto']['name'];
        $tipoArchivo = $_FILES['foto']['type'];
        $tamañoArchivo = $_FILES['foto']['size'];
        $archivoTemporal = $_FILES['foto']['tmp_name'];

        $directorioDestino = __DIR__ . "/../../Fotos"; 
        // Genera un nombre de archivo único para evitar sobrescribir archivos existentes
        $archivoDestino = $directorioDestino . uniqid() . '/' . basename($_FILES["foto"]["name"]);
        
        // Verifica si el archivo tiene un formato de imagen válido
        $tipoArchivo = strtolower(pathinfo($archivoDestino, PATHINFO_EXTENSION));
        $formatosPermitidos = array("jpg", "jpeg", "png", "gif");
        
        if (in_array($tipoArchivo, $formatosPermitidos)) {
            // Mueve el archivo subido al directorio de destino
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $archivoDestino)) {
                // Subida de archivo exitosa.
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
?>