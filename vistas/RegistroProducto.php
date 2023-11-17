<?php
session_start();
if(isset($_SESSION['NOMBRE_USUARIO'])){
    header("Location = Bienvenida.php");
}
if (isset($_SESSION['ID_CATEGORIA'], $_SESSION['NOMBRE_CATEGORIA'])) {
        // Procesar la inserción del producto aquí
        // ...
    
        echo 'Producto insertado exitosamente';
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
        <h1>Inserción de Producto</h1>
        <form id="productForm">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>

                <label for="unidades">Unidades disponibles:</label>
                <input type="number" id="unidades" name="unidades" required>

                <label for="valor">Valor por unidad:</label>
                <input type="number" id="valor" name="valor" required>

                <label for="idCategoria">Categoría:</label>
                <select id="idCategoria" name="idCategoria" action="../controlador/action/act_categoriaProducto.php" required>
                <?php if($_SESSION['ID_CATEGORIA']==null)
                        echo $_SESSION['NOMBRE_CATEGORIA'];

                ?>
                </select>

        <label for="tallaProducto">Talla:</label>
        <input type="text" id="tallaProducto" name="tallaProducto">
                </div>

                <button type="submit">Insertar Producto</button>
        </form>
        </div>        

        <?php 
        require_once("./Templates/Footer.php");
        ?>
        
        <script src="js/registarProducto.js"></script>
</body>
</html>
