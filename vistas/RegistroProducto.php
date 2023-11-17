<?php
session_start();
if(isset($_SESSION['NOMBRE_USUARIO'])){
    header("Location = Bienvenida.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vender</title> 
        <link rel="stylesheet" href="css/registrarProducto.css">
        <link rel="stylesheet" href="css/styleHeaderFooter.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>

</head>
<body>
        <?php 
        require_once("./Templates/Header.php");
        ?>

        <div action="../controlador/action/act_registrarProducto.php" method="post" class="container">
        <div class="container">
                <h2>Registrar Producto</h2>
                <form id="productForm" enctype="multipart/form-data">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" required>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" required></textarea>

                <label for="unidades">Unidades Disponibles:</label>
                <input type="number" id="unidades" required>

                <label for="valor">Valor por Unidad:</label>
                <input type="number" id="valor" required>

                <label for="categoria">Categoría:</label>
                <select id="categoria" onchange="mostrarTalla()">
                        <!-- Las opciones de categorías se cargarán dinámicamente desde la base de datos usando JavaScript -->
                </select>

                <div id="tallaContainer" style="display: none;">
                        <label for="talla">Talla:</label>
                        <select id="talla">
                        <!-- Las opciones de tallas se cargarán dinámicamente desde la base de datos usando JavaScript -->
                        </select>
                </div>

                <label for="imagen">Imagen del Producto:</label>
                <input type="file" id="imagen" accept="image/*" required>

                <button type="button" onclick="registrarProducto()">Registrar Producto</button>
                </form>
                </div>        

        <?php 
        require_once("./Templates/Footer.php");
        ?>
        
        <script src="js/registarProducto.js"></script>
</body>
</html>
