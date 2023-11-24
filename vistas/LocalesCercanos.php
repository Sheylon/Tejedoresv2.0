<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tejedores</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/styleHeaderFooter.css">
    <link rel="stylesheet" href="css/styleLocalesCercanos.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
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

    
    <div class="locales"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31308.542080839143!2d-74.18508827028435!3d11.219582241678317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sartesan%C3%ADas!5e0!3m2!1ses-419!2sco!4v1694737663647!5m2!1ses-419!2sco" width="1353" height="612" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    

    <footer >
        <?php
        require_once("./Templates/Footer.php");
        ?>
    </footer>       
<body> 
</html>