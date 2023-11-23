<?php
session_start();
    require_once("../modelo/dao/ProductoDAO.php"); // Asegúrate de incluir el archivo del ProductoDAO

    if (isset($_SESSION['NOMBRE_USUARIO'])) {
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MostrasProductos</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/stylePagHistoria.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/styleHeaderFooter.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>


<body>
    <header>
        <?php 
        require_once("templates/Header.php");
        ?>
    </header>
    
    <div class="container-title">Ropa</div>

    <?php
        $productoDAO = new ProductoDAO(); // Asegúrate de crear una instancia de ProductoDAO
        $listproducto = $productoDAO->leerProductos();
    ?>

    <?php foreach ($listproducto as $Producto) { ?>
    
    <div class="card-container">
        <div class="item-a">
            <div class="box">
                <div class="slide-img">
                    <img src="img/blusa-2.jpg" alt="" />
                    <div class="overlay">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
                
                <div class="detail-box">
                    <div class="type">
                        <a><?php echo $Producto->getNombre(); ?></a>
                    </div>
                    <a class="price"><?php echo $Producto->getValorUnidad(); ?></a>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <footer>
        <?php
        require_once("./Templates/Footer.php");
        ?>
    </footer>

<body> 
</html>