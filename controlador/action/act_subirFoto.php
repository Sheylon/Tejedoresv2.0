<?php
function subirfoto(){
       
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['image']['name'];
        $tipoArchivo = $_FILES['image']['type'];
        $archivoTemporal = $_FILES['image']['tmp_name'];

        $directorioDestino = __DIR__ . "/../../Fotos"; 

        // Genera un nombre de archivo único para evitar sobrescribir archivos existentes
        // $nombreNuevo = basename($nombreArchivo);
        $archivoDestino = $directorioDestino . uniqid() . '_' . $nombreArchivo;
        
        // Verifica si el archivo tiene un formato de imagen válido
        $tipoArchivo = strtolower(pathinfo($archivoDestino, PATHINFO_EXTENSION));
        $formatosPermitidos = array("jpg", "jpeg", "png");
        
        if (in_array($tipoArchivo, $formatosPermitidos)) {
            // Mueve el archivo subido al directorio de destino
            if (move_uploaded_file($archivoTemporal, $archivoDestino)) {
                // Subida de archivo exitosa.
                return $nombreArchivo;
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