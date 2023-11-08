<?php
session_start();
if(isset($_SESSION['ID_USUARIO'], $_SESSION['$NOMBRE_USUARIO'], 
            $_SESSION['CORREO_USUARIO'], $_SESSION['USUARIO'], $_SESSION['ROL_USUARIO'] )){
    header("Location =index");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tejedores</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/stylePagHistoria.css">
    <link rel="stylesheet" href="css/perfil.css">


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
                        echo '<li><a href="./perfil.php"><i class="fa-regular fa-user"></i> Perfil</a></li>';
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

    <div class="card">
        <div class="profile-picture">
            <!-- Aquí puedes agregar la imagen del perfil del usuario -->
            <img src="./img/images.png" alt="Foto de perfil">
        </div>
        <div class="user-details">
            <h1>Perfil de Usuario</h1>
            <p>Bienvenido, <?php echo $_SESSION['NOMBRE_USUARIO']; ?>.</p>
            <p>Nombre de usuario: <?php echo  $_SESSION['USUARIO']; ?>.</p>
            <p>Correo Electrónico: <?php echo  $_SESSION['CORREO_USUARIO']; ?>.</p>
            <p>Rol: <?php echo  $_SESSION['ROL_USUARIO']; ?>.</p>
            <!-- Puedes agregar más detalles del perfil aquí -->
        </div>
    </div>

    <div class="opciones">
        <ul>
            <li>
            <a href="">Editas datos</a>
            </li>
            <li>
            <a href="../controlador/action/act_eliminateCuenta.php">Eliminar Cuenta</a>
            </li>
        </ul>
    </div>




    <footer>
        <!-- Agregar contenido del pie de página -->
    </footer>
</body>
</html>
