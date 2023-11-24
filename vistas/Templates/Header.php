
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
                            if ($_SESSION['ROL_USUARIO'] == "Vendedor") {
                            echo '<li><a clas="enlace_seccion" href="./RegistroProducto.php"><i class="fa-solid fa-chart-line"></i> Vender</a></li>';
                            }
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
                
                <a href="./index.php"><img src="img/Logo.png" alt="Logo De la tienda"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="">Productos</a>
                        <ul class="submenu2">
                            <li><a href="./MostrasProductos.php">Ropa</a></li>
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
                        <a href="./mostarUsuarios.php">Locales cercanos</a> 
                    </li>
                </ul>
            </nav>
            <div class="compra">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>   
        </div>
    </header>
    