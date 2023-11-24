<?php
session_start();
if(isset($_SESSION['NOMBRE_USUARIO'])){   
}else{
        header('Location = RegistroLogin.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pefil</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css//styleHeaderFooter.css">
    <link rel="stylesheet" href="css/styleEditarPerfil.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
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


<div class="editar-perfil">
    <h2>Editar Perfil</h2>
    <form action="../controlador/action/act_editarPerfil.php" method="post">
        <input type="texto" name="ID_USUARIO" value="<?php echo $_SESSION['ID_USUARIO']; ?>" hidden>
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
            <label for="CONTRASENA_USUARIOa">Contraseña:</label>
            <input type="text" class="form-control" name="CONTRASENA_USUARIO" value="<?php echo $_SESSION['CONTRASENA_USUARIO']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

    <footer>
        <?php 
        require_once("./Templates/Footer.php");
        ?>
    </footer>
      
<body> 
</html>