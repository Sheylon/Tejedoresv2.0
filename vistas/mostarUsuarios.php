<?php
    if ( isset($_SESSION['NOMBRE_USUARIO']) == "administrador"){
    }else{
        header('Location =index.php');
    }

    require_once( __DIR__ ."/../controlador/mdb/mdbUsuario.php");
    require_once( __DIR__ ."/../modelo/entidad/Usuario.php");

    session_start();   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MostrasProductos</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/styleHeaderFooter.css">
    <link rel="stylesheet" href="css/styleMostarUsuarios.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <script src="https://kit.fontawesome.com/a12187352c.js" crossorigin="anonymous"></script>
</head>


<body>
    
    <header>
        <?php 
        require_once("templates/Header.php");
        ?>
    </header>
    
    <div class="container-title">Listado de Usuarios</div>

    
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>idUsuario</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $listaUsuario = leerUsuarios();
                foreach ($listaUsuario as $usuario => $usua) { ?>
                    <tr>
                        <td><?php echo $usua->getIdUsuario(); ?></td>
                        <td><?php echo $usua->getNombreCompleto(); ?></td>
                        <td><?php echo $usua->getCorreo(); ?></td>
                        <td><?php echo $usua->getUsuario(); ?></td>
                        <td><?php echo $usua->getRol(); ?></td>
                        <td>
                            <a class="edita" href="">Editar</a>
                            
                            <a class="eliminar" href="">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    

            

    <footer>
        <?php
        require_once("./Templates/Footer.php");
     ?>
    </footer>

<body> 
</html>