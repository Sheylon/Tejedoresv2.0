<?php

session_start();

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica si se seleccionó un archivo para subir
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['foto']['name'];
        $tipoArchivo = $_FILES['foto']['type'];
        $tamañoArchivo = $_FILES['foto']['size'];
        $archivoTemporal = $_FILES['foto']['tmp_name'];

        $directorioDestino = __DIR__ . "/../../Fotos"; 
        // Genera un nombre de archivo único para evitar sobrescribir archivos existentes
        $archivoDestino = $directorioDestino . uniqid() . '_' . basename($_FILES["foto"]["name"]);
        
        // Verifica si el archivo tiene un formato de imagen válido
        $tipoArchivo = strtolower(pathinfo($archivoDestino, PATHINFO_EXTENSION));
        $formatosPermitidos = array("jpg", "jpeg", "png", "gif");
        
        if (in_array($tipoArchivo, $formatosPermitidos)) {
            // Mueve el archivo subido al directorio de destino
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $archivoDestino)) {
                // Subida de archivo exitosa, redirige a una página de éxito o realiza más procesamiento
                header("Location: ../../vistas/index.php?msg=Foto subida exitosamente");
                exit();
            } else {
                // Error al mover el archivo, redirige con un mensaje de error
                header("Location: ../../vistas/SubirFoto.php?msg=Error al subir la foto");
                exit();
            }
        } else {
            // Formato de archivo no válido, redirige con un mensaje de error
            header("Location: ../../vistas/SubirFoto.php?msg=Formato de archivo no válido");
            exit();
        }
    } else {
        // No se seleccionó ningún archivo, redirige con un mensaje de error
        header("Location: ../../vistas/SubirFoto.php?msg=Selecciona un archivo para subir");
        exit();
    }
} else {
    // Método de solicitud no válido, redirige con un mensaje de error
    header("Location: ../../vistas/SubirFoto.php?msg=Solicitud no válida");
    exit();
}
?>