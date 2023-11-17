<?php

session_start();
if(isset($_SESSION ['Usuario'])){
    header("Location = Bienvenida.php");
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styleRegistroLogin.css">
    <link rel="stylesheet" href="css/styleHeaderFooter.css">

    <title>RegistroLogin</title>
</head>
<body>
    <header>
        <div class="seccion">
            <ul>
                <li>
                    <a clas="enlace_seccion" href="./index.php">Inicio</a>
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
                            <li><a href="../Productos/Ropa/index.html">Ropa</a></li>
                            <li><a href="../Productos/Zapatos/index.html">Calzado</a></li>
                            <li><a href="">Bolsos</a></li>
                            <li><a href="">cocina</a></li>
                            <li><a href="">Baño</a></li>
                            <li><a href="">accesorios</a></li>
                        </ul>
                    </li>
        
                    <li><a href="">Comunidad</a>
                        <ul class="submenu2">
                            <li><a href="">Novedades</a></li>
                            <li><a href="../comunidad/donaciones/index.html">Donacciones</a></li>
                            <li><a href="../comunidad/intercambiar/index.html">Intercambiar</a></li>
                        </ul>
                    </li>
        
                    <li>
                        <a href="../locales/index.html">Locales cercanos</a>
                    </li>
                </ul>
            </nav>
            <div class="compra">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>   
        </div>
    </header>




    <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">

                    <!--Login-->
                    <form action="../controlador/action/act_login.php" method= "POST" class=formulario__login>
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name= "correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action= "../controlador/action/act_registrarUsuario.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="Nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="Correo">
                        <input type="text" placeholder="Usuario" name="Usuario">
                        <select name="rol" id="rol">
                        <option value="" style="color: gray;" disabled selected hidden>Registrar como</option>
                        <option value="usuario">Usuario</option>
                        <option value="Vendedor">Vendedor</option>
                        </select>
                        <input type="password" placeholder="Contrasena" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

    <footer>
        <?php 
        require_once("./Templates/Footer.php");
        ?>
    </footer>     
    <script src="js/script_RegitroLogin.js"></script>
</body>
</html>