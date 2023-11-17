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
        <link rel="stylesheet" href="css/registrarProducto.css">
        <link rel="stylesheet" href="css/styleHeaderFooter.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        
        <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <?php 
        require_once("./Templates/Header.php");
        ?>
        </header>
        <div action="../controlador/action/act_registrarProducto.php" method="post" class="container">
                <h2>Insertar Producto</h2>
                <form id="productForm">
                        <label for="categoria">Categoría:</label>
                        <select name="categoria" id="categoria">
                        <option value="" style="color: gray;" disabled selected hidden>categoria</option>
                        <option value="usuario">Ropa</option>
                        <option value="Vendedor">Accesorio</option>

                        <label for="talla">Talla:</label>
                        <select name="talla" id="talla">
                        <option value="" style="color: gray;" disabled selected hidden>Talla</option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre_producto" required>

                        <label for="descripcion">Descripción:</label>
                        <textarea id="descripcion" name="descripcion" required></textarea>

                        <label for="unidades">Unidades Disponibles:</label>
                        <input type="number" id="unidades" name="unidades_disponibles" required>

                        <label for="valor">Valor por Unidad:</label>
                        <input type="number" id="valor" name="valor_unidad" required>

        
                        <form action="../controlador/action/act_subirFoto.php" method="post" enctype="multipart/form-data">
                                <label for="foto">Selecciona una foto para subir:</label>
                                <input type="file" id="foto" name="foto" accept="image/*" required>
                                <input type="submit" value="Subir Foto">
                        </form>
                        <button type="button" onclick="insertarProducto()">Insertar Producto</button>
                </form>
        </div>
        <footer>
        <?php 
        require_once("./Templates/Footer.php");
        ?>
        </footer>
        <script src="js/registarProducto.js"></script>
</body>
</html>
