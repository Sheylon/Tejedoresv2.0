<?php
session_start();
    require_once (__DIR__.'/../controlador/mdb/mdbProductos.php');
    require_once (__DIR__.'/../modelo/entidad/Producto.php');
    require_once (__DIR__.'/../controlador/mdb/mdbFoto.php');
    require_once (__DIR__.'/../modelo/entidad/Foto.php');
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MostrasProductos</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/styleMostrasProductos.css">
    <link rel="stylesheet" href="css/styleHeaderFooter.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./js/mostrasProductos.js"></script>
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
    
    <div class="container-title">Ropa</div>

    
    <div class="container">
        <?php
        $aregloProducto = leerProductos();
        foreach ($aregloProducto as $Producto => $produc) { ?>
            
            
            <div class="card-container">
                <div class="item-a">
                    <div class="box">
                        <div class="slide-img">
                            <?php  $foto = buscarFotoPorIdProducto($produc->getIdProducto());
                            if($foto!=null){
                                $imagen = $foto->getUrlFoto();
                            }else{
                                $imagen="SinFoto.png";
                            }
                            ?>
                            <img src="../Fotos/<?php  echo $imagen ?>" alt="" />
                            <div class="overlay">
                            <form class="comprarForm">
                                <input type="hidden" name="idProducto" value="<?php echo $produc->getIdProducto() ?>">
                                <button class="buy-btn" type="submit">Comprar Ahora</button>
                            </form>

                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="type">
                                <a><span><?php  
                                echo $produc->getNombre() ?></span></a>
                            </div>
                            <a class="price"><?php echo $produc->getValorUnidad()?></a>
                        </div>
                    </div>
                </div>
            </div>  
            
            
        <?php ; } ?>
    </div>



    <footer>
        <?php
        require_once("./Templates/Footer.php");
     ?>
    </footer>

<body> 
</html>