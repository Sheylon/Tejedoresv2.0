<?php
session_start();
if(isset($_SESSION['ID_USUARIO']) !=  null){
}else{
        header('Location = RegistroLogin.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RegistroProducto</title> 
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

        <div class="container">
                <h1>Inserción de Producto</h1>
                <form id="productForm" action="../controlador/action/act_registrarProducto.php" method="post" enctype="multipart/form-data">

                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="descripcion">Descripción:</label>
                        <textarea id="descripcion" name="descripcion" required></textarea>

                        <label for="unidades">Unidades disponibles:</label>
                        <input type="number" id="unidades" name="unidades_disponibles" required>

                        <label for="valor">Valor por unidad:</label>
                        <input type="number" id="valor_unidad" name="valor_unidad" required>

                        <label for="idCategoria">Categoría:</label>
                        <input type="number" id="idcategoriaproducto" name="idcategoriaproducto" required>

                        <label for="idTalla">Talla:</label>
                        <input type="number" id="id_talla" name="id_talla" required>

                        <label for="image">Selecciona una imagen:</label>
                        <input type="file" name="image" id="image" accept="image/*" required>
                

                        <button type="submit">Insertar Producto</button>
                </form>
        </div>    
        
        <?php 
        require_once("./Templates/Footer.php");
        ?>
        
        <script src="js/registarProducto.js"></script>
</body>
</html>
