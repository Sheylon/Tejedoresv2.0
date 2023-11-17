<?php
session_start();
if(isset($_SESSION['NOMBRE_USUARIO'])){
    header("Location = Bienvenida.php");
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
    <link rel="stylesheet" href="css/styleHeaderFooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php 
        require_once("./Templates/Header.php");
        ?>
    </header>

    <div class="slider-frame">
        <ul>
            <li>
                <img src="img/1.jpg">
            </li>
            <li>
                <img src="img/2.jpg">
            </li>
            <li>
                <img src="img/3.jpg">
            </li>
            <li>
                <img src="img/4.jpg">
            </li>
        </ul>
    </div>

    <div class="about">
        <h2>Nuestra Historia</h2>
        <p>Somos una plataforma dedicada a promover y preservar las artesanías locales. Nuestra misión es conectar a los amantes de las artesanías con los talentosos artesanos de nuestra comunidad. Creemos en la belleza y la autenticidad de las piezas hechas a mano, y queremos compartir esta pasión contigo.</p>
    </div>

    <div class="mission">
        <h2>Nuestra Misión</h2>
        <p>Nuestra misión es apoyar a los artesanos locales y fomentar la cultura de las artesanías. Queremos crear un espacio donde los usuarios puedan descubrir, intercambiar y donar artesanías únicas. Al hacerlo, esperamos contribuir al crecimiento de nuestras comunidades locales y preservar nuestras tradiciones culturales.</p>
    </div>

    <div class="team">
        <h2>Nuestro Equipo</h2>
        <p>Nuestro equipo está formado por apasionados defensores de las artesanías locales. Trabajamos en estrecha colaboración con artesanos talentosos y compartimos su compromiso con la calidad y la autenticidad. Juntos, estamos comprometidos en crear una comunidad en línea donde la creatividad y la cultura local florezcan.</p>
    </div>

    <footer>
        <?php 
        require_once("./Templates/Footer.php");
        ?>
    </footer>
       
<body> 
</html>