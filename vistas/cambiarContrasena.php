<?php
session_start();
if(isset($_SESSION['NOMBRE_USUARIO'])){   
}else{
        header('Location = RegistroLogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="css/restablecerContrasena.css">


</head>
<body>
    </div class="container">
        <div class="row justify-content-md-center" style="margin-top:10%">
            <form action="../controlador/action/act_editarContrasena.php" method="post">
                <h2>Cambiar Contraseña</h2>
                <input type="texto" name="ID_USUARIO" value="<?php echo $_SESSION['ID_USUARIO']; ?>" hidden>
                
                <div class="form-group">
                    <label for="CORREO_USUARIO">Correo: <?php echo $_SESSION['CORREO_USUARIO']; ?></label>
                </div>
                <br>
                <div class="form-group">
                    <label for="CONTRASENA_USUARIOa">Contraseña:</label>
                    <input type="text" class="form-control" name="CONTRASENA_USUARIO" value="<?php echo $_SESSION['CONTRASENA_USUARIO']; ?>">
                </div>
                <button type="submit">Cambiar Contraseña</button>
            </form>
        </div>
    </div>
</body>
</html>
