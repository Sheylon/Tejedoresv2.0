<?php
session_start();
if(isset($_SESSION['ID_USUARIO']) !=  null){
    
}else{
    header("Location =RegistroLogin.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerPefil</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/stylePagHistoria.css">
    <link rel="stylesheet" href="css/styleHeaderFooter.css">
    <link rel="stylesheet" href="css/perfil.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        if($_SESSION['ROL_USUARIO'] == "administrador"){
            require_once("./Templates/headerAdmin.php");

        }else{
        require_once("./Templates/Header.php");
        }
    ?>

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
                <a href="./editarPerfil.php" class="button">Editas datos</a>
            </li>
            <li>
                <a href="../controlador/action/act_eliminateCuenta.php" class="button2">Eliminar Cuenta</a>
            </li>
        </ul>
    </div>


    <footer>
        <?php 
        require_once("./Templates/Footer.php");
        ?>
    </footer>      
<body> 
</html>