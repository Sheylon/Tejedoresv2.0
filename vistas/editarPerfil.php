<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pefil</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/stylePagHistoria.css">
    <link rel="stylesheet" href="css/styleEditarPerfil.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <div class="seccion">
        <ul>
            <li>
                <ul class="menu">
                    <li>
                    <?php
                    if (isset($_SESSION['NOMBRE_USUARIO'])) {
                        echo '<a href="#"><div class="profile-dropdown-btn"><div class="profile-img"></div><span>' . $_SESSION['NOMBRE_USUARIO'] . '<i class="fa-solid fa-angle-down"></i></span></a>';
                        echo '<ul class="submenu2">';
                        echo '<li><a clas="enlace_seccion" href="funciones/carrito/index.html"><i class="fa-solid fa-cart-shopping"></i> Compras</a></li>';
                        echo '<li><a clas="enlace_seccion" href="funciones/Vender/index.html"><i class="fa-solid fa-chart-line"></i> Vender</a></li>';
                        echo '<li><a href="./verPerfil.php"><i class="fa-regular fa-user"></i> Perfil</a></li>';
                        echo '<li><a href="#"><i class="fa-solid fa-sliders"></i> Configuración</a></li>';
                        echo '<li><a href="#"><i class="fa-regular fa-circle-question"></i> Servicio de soporte</a></li>';
                        echo '<hr />';
                        echo '<li><a href="../controlador/action/act_lagout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar sesión</a></li>';
                        echo '</ul>';
                    } else {
                        echo '<a href="RegistroLogin.php" class="enlace_seccion">Inicio | Registro</a>';
                    }
                    ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>


    <div class="contenido-header">
        <div class="logo">
            <img src="img/Logo.png" alt="Logo De la tienda">
        </div>
        <nav>
            <ul class="menu">
                <li><a href="">Productos</a>
                    <ul class="submenu2">
                        <li><a href="funciones/Productos/Ropa/index.html">Ropa</a></li>
                        <li><a href="funciones/Productos/Zapatos/index.html">Calzado</a></li>
                        <li><a href="">Bolsos</a></li>
                        <li><a href="">Cocina</a></li>
                        <li><a href="">Baño</a></li>
                        <li><a href="">Accesorios</a></li>
                    </ul>
                </li>
    
                <li><a href="">Comunidad</a>
                    <ul class="submenu2">
                        <li><a href="">Novedades</a></li>
                        <li><a href="funciones/comunidad/donaciones/index.html">Donacciones</a></li>
                        <li><a href="funciones/comunidad/intercambiar/index.html">Intercambiar</a></li>
                    </ul>
                </li>
    
                <li>
                    <a href="funciones/locales/index.html">Locales cercanos</a> 
                </li>
            </ul>
        </nav>
        <div class="compra">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>   
    </div>
</header>



<div class="editar-perfil">
    <h2>Editar Perfil</h2>
    <form action="../controlador/action/act_editarPerfil.php" method="post">
        <input type="texto" name="idUsuario" value="<?php echo $_SESSION['ID_USUARIO']; ?>" hidden>
        <div class="form-group">
            <label for="NOMBRE_USUARIO">Nombre Completo:</label>
            <input type="text" class="form-control" name="NOMBRE_USUARIO" value="<?php echo $_SESSION['NOMBRE_USUARIO']; ?>">
        </div>
        <div class="form-group">
            <label for="USUARIO">Nombre de Usuario:</label>
            <input type="text" class="form-control" name="USUARIO" value="<?php echo $_SESSION['USUARIO']; ?>">
        </div>
        <div class="form-group">
            <label for="CORREO_USUARIO">Correo:</label>
            <input type="email" class="form-control" name="CORREO_USUARIO" value="<?php echo $_SESSION['CORREO_USUARIO']; ?>">
        </div>
        <div class="form-group">
            <label for="ROL_USUARIO">Rol:</label>
            <input type="text" class="form-control" name="ROL_USUARIO" value="<?php echo $_SESSION['ROL_USUARIO']; ?>">
        </div>
        
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="text" class="form-control" name="contrasena" value="<?php echo $_SESSION['CONTRASENA_USUARIO']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<footer class="footer-distributed">
<div class="footer-left">
    <img src="img/Logo.png" alt="logo">

    <p class="footer-links">
        <a href="index.html">Home</a>
        |
        <a href="">About</a>
        |
        <a href="">Contact</a>
        |
        <a href="">Blog</a>
    </p>

    <p class="footer-company-name">Copyright © 2021 <strong>TejedoresDeCulturaSantaMarta</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Santa Marta</span>
            Colombia</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+57 321*38**75</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">TculturaSantaMarta@gmail.com</a></p>
    </div>
</div>

<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
    </p>
    <div class="footer-icons">
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-instagram"></i></a>
        <a href=""><i class="fa fa-linkedin"></i></a>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>       
<body> 
</html>