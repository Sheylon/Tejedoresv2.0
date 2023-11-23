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

    
    <div class="container-title"><?php echo $Producto->getNombre(); ?></div>

    <main>
        <div class="container-img">
            <img src="img/Pantalon.jpg" alt="">
            
        </div>
        <div class="container-info-product">
            <div class="container-price">
                <span>$95.00</span>
                <i class="fa-solid fa-angle-right"></i>
            </div>

            <div class="container-details-product">
                <div class="form-group">
                    <label for="colour">Color</label>
                    <select name="colour" id="colour">
                        <option disabled selected value="">
                            Escoge una opción
                        </option>
                        <option value="rojo">Rojo</option>
                        <option value="blanco">Blanco</option>
                        <option value="beige">Beige</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="size">Talla</label>
                    <select name="size" id="size">
                        <option disabled selected value="">
                            Escoge una opción
                        </option>
                        <option value="40">S</option>
                        <option value="42">M</option>
                        <option value="43">L</option>
                        <option value="44">XL</option>
                    </select>
                </div>
                <button class="btn-clean">Limpiar</button>
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
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Laboriosam iure provident atque voluptatibus
                        reiciendis quae rerum, maxime placeat enim cupiditate
                        voluptatum, temporibus quis iusto. Enim eum qui delectus
                        deleniti similique? Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. Sint autem magni earum est
                        dolorem saepe perferendis repellat ipsam laudantium cum
                        assumenda quidem quam, vero similique? Iusto officiis
                        quod blanditiis iste?
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