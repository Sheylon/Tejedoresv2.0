<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/stylePagHistoria.css">
    <link rel="stylesheet" href="css/styleEditarproducto.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
        <?php 
        require_once("./Templates/Header.php");
        ?>
    </header>

<!-- 

<div class="editar-producto">
    <h2>Editar Producto</h2>
    <form action="../controlador/action/act_editarProducto.php" method="post">
        <input type="hidden" name="idProducto" value="<?php ; ?>">
        
        <div class="form-group">
            <label for="nombreProducto">Nombre del Producto:</label>
            <input type="text" class="form-control" name="nombreProducto" value="<?php ; ?>">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" name="descripcion" value="<?php ; ?>">
        </div>

        <div class="form-group">
            <label for="unidadesDisponibles">Unidades Disponibles:</label>
            <input type="number" class="form-control" name="unidadesDisponibles" value="<?php ; ?>">
        </div>

        <div class="form-group">
            <label for="valorUnidad">Valor por Unidad:</label>
            <input type="text" class="form-control" name="valorUnidad" value="<?php ; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div> -->



<footer>
        <?php 
        require_once("./Templates/Footer.php");
        ?>
    </footer>
<body>