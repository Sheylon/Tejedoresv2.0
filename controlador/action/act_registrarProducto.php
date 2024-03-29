<?php

$_SESSION['Acceso'] = true;
session_start();

require_once(__DIR__ . "/../../modelo/entidad/Producto.php");
require_once(__DIR__ . "/../../modelo/entidad/Foto.php");
require_once(__DIR__ . "/../mdb/mdbProductos.php");
require_once(__DIR__ . "/../mdb/mdbFoto.php");

if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['unidades_disponibles'],
    $_POST['valor_unidad'], $_POST['Categoria'], $_POST['Talla'])) {

    $nombreProducto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $unidadesDisponibles = $_POST['unidades_disponibles'];
    $valorUnidad = $_POST['valor_unidad'];
    $TipoProducto = $_POST['Categoria'];
    $Talla = $_POST['Talla'];
    $idusuario = $_SESSION['ID_USUARIO'];

    $idTipoProducto = 0;
    $idTalla = 0;

    if($TipoProducto == "Ropa"){
        
        $idTipoProducto = 1; 
    }else{
        $idTipoProducto = 2;    
    }

    if($idTipoProducto == 1){
        
        if($Talla == "XS"){
            $idTalla = 1;
        }else if($Talla == "S"){
            $idTalla = 2;
        }else if($Talla == "M"){
            $idTalla = 3;
        }else if($Talla == "L"){
            
            $idTalla = 4;
        }   
    }else{
        $idTalla = 5;
    }
        

    $producto = new Producto(null, $nombreProducto, $descripcion, $unidadesDisponibles, $valorUnidad, $idTipoProducto, $idTalla, $idusuario);

    $resultadoProducto = insertarProducto($producto);

    if ($resultadoProducto) {
        $idproducto = buscarProductoPorNombre($nombreProducto);
        $urlFoto = generarURL();
        header("Location:../../vistas/index.php?msg=Producto registrado exitosamente");


        if ($urlFoto) {
            $foto = new Foto(null, $urlFoto, $idproducto);
            $resultadoFoto = insertarFoto($foto);

            if ($resultadoFoto) {
                header("Location:../../vistas/index.php?msg=Producto registrado exitosamente");
                exit();
            } else {
                header("Location:../../vistas/RegistroProducto.php?msg=Error al subir la foto");
                exit();
            }
        } else {
            header("Location:../../vistas/RegistroProducto.php?msg=Error al subir la foto (URL vacía)");
            exit();
        }
    } else {
        header("Location: ../../vista/RegistroProducto.php?msg=Datos de registro incompletos");
        exit();
    }
} else {
    header("Location: ../../vista/RegistroProducto.php?msg=Datos de registro incompletos");
    exit();
}

function generarURL(){
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['image']['name'];
        $archivoTemporal = $_FILES['image']['tmp_name'];

        $directorioDestino = __DIR__ . "/../../Fotos/";
        $nombreUnico = uniqid() . '_' . basename($nombreArchivo);
        $archivoDestino = $directorioDestino . $nombreUnico;

        $tipoArchivo = strtolower(pathinfo($archivoDestino, PATHINFO_EXTENSION));
        $formatosPermitidos = array("jpg", "jpeg", "png");

        if (in_array($tipoArchivo, $formatosPermitidos)) {
            if (move_uploaded_file($archivoTemporal, $archivoDestino)) {
                return  $nombreUnico; // Devuelve solo la parte relativa
            } else {
                // Puedes lanzar una excepción en caso de error
                throw new Exception("Error al mover el archivo");
            }
        } else {
            // Puedes lanzar una excepción en caso de formato no válido
            throw new Exception("Formato de archivo no válido");
        }
    } else {
        // Puedes lanzar una excepción en caso de que no se haya seleccionado ningún archivo
        throw new Exception("No se seleccionó ningún archivo");
    }
}

?>
