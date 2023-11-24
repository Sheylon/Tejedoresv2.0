<?php
session_start();
    require_once (__DIR__.'/../controlador/mdb/mdbProductos.php');
    require_once (__DIR__.'/../modelo/entidad/Producto.php');
    require_once (__DIR__.'/../controlador/mdb/mdbFoto.php');
    require_once (__DIR__.'/../modelo/entidad/Foto.php');

    if (isset($_SESSION['NOMBRE_USUARIO'])) {
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verProducto</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/verProducto.css">
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

    <?php
    $id = $_POST["idProducto"];
        $Producto = buscarProductoPorId($id);
    ?>

    <div class="container-title"><p><?php echo $Producto->getNombre()?></p></div>

    <main>
        <div class="container-img">
            <?php  $foto = buscarFotoPorIdProducto($Producto->getIdProducto());
                if($foto!=null){
                    $imagen = $foto->getUrlFoto();
                }else{
                    $imagen="SinFoto.png";
                }
            ?>
            <img src="../Fotos/<?php  echo $imagen ?>" alt="" />
        
        </div>
        <div class="container-info-product">
            <div class="container-price">
                <span><?php echo $Producto->getValorUnidad()?></div></span>
                <i class="fa-solid fa-angle-right"></i>
            </div>

            <div class="container-details-product">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="size">Talla</label>
                    <?php  
                        if($Producto->getIdTalla() == 1) {
                            echo "XS"; 
                        }else if($Producto->getIdTalla() == 2) {
                            echo "S"; 
                        }else if($Producto->getIdTalla() == 3) {
                            echo "M"; 
                        }else{
                            echo "L";
                        }
                    ?>
                    
                </div>
                
            </div>

            <div class="container-add-cart">
                <div class="container-quantity">
                    <input
                        type="number"
                        placeholder="1"
                        value="1"
                        min="1"
                        class="input-quantity"
                    />
                    <div class="btn-increment-decrement">
                        <i class="fa-solid fa-chevron-up" id="increment"></i>
                        <i class="fa-solid fa-chevron-down" id="decrement"></i>
                    </div>
                </div>
                <button class="btn-add-to-cart">
                    <i class="fa-solid fa-plus"></i>
                    Añadir al carrito
                </button>
            </div>

            <div class="container-description">
                <div class="title-description">
                    <h4>Descripción</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="text-description">
                    <p>
                        <?php 
                           echo $Producto->getDescripcion();
                        ?>
                    </p>
                </div>
            </div>

            <div class="container-additional-information">
                <div class="title-additional-information">
                    <h4>Información adicional</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="text-additional-information hidden">
                    <p>-----------</p>
                </div>
            </div>

            <div class="container-reviews">
                <div class="title-reviews">
                    <h4>Reseñas</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="text-reviews hidden">
                    <p>-----------</p>
                </div>
            </div>

            <div class="container-social">
                <span>Compartir</span>
                <div class="container-buttons-social">
                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </main>

    <script src="./js/verProducto.js"></script>
    <footer>
        <?php
        require_once("./Templates/Footer.php");
    ?>
    </footer>

<body> 
</html>