<?php
session_start();
    require_once (__DIR__.'/../controlador/mdb/mdbProductos.php');
    require_once (__DIR__.'/../modelo/entidad/Producto.php');
    require_once (__DIR__.'/../controlador/mdb/mdbFoto.php');
    require_once (__DIR__.'/../modelo/entidad/Foto.php');

    if (isset($_SESSION['NOMBRE_USUARIO'])) {
    }

    
// Verificar si se proporcionó el ID del producto en la URL
$idProducto = isset($_GET['idProducto']) ? $_GET['idProducto'] : null;

// Realizar las operaciones necesarias con el ID del producto
$Producto = buscarProductoPorId($idProducto);

// Verificar si el producto se encontró antes de mostrar detalles
if ($Producto === null) {
    echo "Error: No se encontró el producto con el ID proporcionado.";
    exit;
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
        if($_SESSION['ROL_USUARIO'] == "administrador"){
            require_once("./Templates/headerAdmin.php");

        }else{
        require_once("./Templates/Header.php");
        }
        ?>
    </header>


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

     
          

        <div class="container-details-product">
            <div class="container-price">
                <h2>Precio: </hs>
                <span><?php echo $Producto->getValorUnidad()?></span>
            </div>
                
            <div class="form-group">
                <label for="size">Talla</label>
                <select name="size" id="size">
                    <option disabled selected value="">
                        Escoge una opción
                    </option>
                    <?php  
                        $selectedSizeId = $Producto->getIdTalla();

                        $sizeOptions = [
                            1 => 'XS',
                            2 => 'S',
                            3 => 'M',
                            4 => 'L'
                        ];
                        // Loop through size options and generate the corresponding <option> elements
                        foreach ($sizeOptions as $sizeId => $sizeLabel) {
                            $selected = ($sizeId == $selectedSizeId) ? 'selected' : '';
                            echo "<option value=\"$sizeId\" $selected>$sizeLabel</option>";
                        }
                    ?>
                </select>
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
                    <p>Me parece muy bueno el producto, el material es muy bueno, !EXCELENTE¡</p>
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