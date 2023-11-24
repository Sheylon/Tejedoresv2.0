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
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>


<body>
    
    <header>
        <?php 
        require_once("templates/Header.php");
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
                            <form action="../controlador/action/act_login.php" method= "POST" class=>
                                
                            <input   name="idProducto" value="<?php $listaIdProducto[$p]?>" hidden>
                                <button class="buy-btn">Comprar Ahora</button>
                            </form>

                
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="type">
                                <a><span><?php  
                                
                                echo $produc->getNombre() ?></span></a>
                            </div>
                            <a class="price"><?php echo $produc->getNombre() ?></a>
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