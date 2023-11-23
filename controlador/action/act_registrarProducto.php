<?php

session_start();

require_once(__DIR__ . "/../../modelo/entidad/Producto.php");
require_once(__DIR__ . "/../../modelo/entidad/Foto.php");
require_once(__DIR__ . "/../mdb/mdbProductos.php");
require_once(__DIR__ . "/../mdb/mdbFoto.php");




if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['unidades_disponibles'],
    $_POST['valor_unidad'], $_POST['idcategoriaproducto'], $_POST['id_talla'])) {

    $nombreProducto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $unidadesDisponibles = $_POST['unidades_disponibles'];
    $valorUnidad = $_POST['valor_unidad'];
    $idTipoProducto = $_POST['idcategoriaproducto'];
    $idTalla = $_POST['id_talla'];
    $idusuario = $_SESSION['ID_USUARIO'];

    $producto = new Producto(null, $nombreProducto, $descripcion, $unidadesDisponibles, $valorUnidad, $idTipoProducto, $idTalla, $idusuario);

    $resultadoProducto = insertarProducto($producto);

    if ($resultadoProducto) {
        $idProducto = buscarProductoPorNombre($nombreProducto);
        $urlFoto = generarURL();

        if ($urlFoto) {
            $foto = new Foto(null, $urlFoto, 1);
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
        header("Location: ../../vista/editarPerfil.php?msg=Error en el registro del producto");
        exit();
    }
} else {
    header("Location: ../../vista/RegistroProducto.php?msg=Datos de registro incompletos");
    exit();
}

function generarURL()
{
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['image']['name'];
        $archivoTemporal = $_FILES['image']['tmp_name'];

        $directorioDestino = __DIR__ . "/../../Fotos/";
        $archivoDestino = $directorioDestino . uniqid() . '_' . basename($nombreArchivo);

        $tipoArchivo = strtolower(pathinfo($archivoDestino, PATHINFO_EXTENSION));
        $formatosPermitidos = array("jpg", "jpeg", "png");

        if (in_array($tipoArchivo, $formatosPermitidos)) {
            if (move_uploaded_file($archivoTemporal, $archivoDestino)) {
                return $archivoDestino;
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
