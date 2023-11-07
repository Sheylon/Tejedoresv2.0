<?php
        session_start();
        require_once (__DIR__."/../mdb/mdbUsuario.php");

	if(isset($_POST['submit'])){
		$errMsg = '';
		//username and password sent from Form
		$correo = $_POST['correo'];
		$password = $_POST['contrasena'];
                
                $usuario = autenticarUsuario($correo, $password);
                echo $email;

		if($usuario != null){ // Puede iniciar sesión
                    $_SESSION['ID_USUARIO'] = $usuario->getIdUsuario();
                    $_SESSION['NOMBRE_USUARIO'] = $usuario->getNombreCompleto();
                    $errMsg .= 'Username and Password are dffd found';
                    header("Location:../../vistas/index.php");
		}else{ // No puede iniciar sesión
                    $errMsg .= 'Username and Password are not found';
                    header("Location:../../vistas/RegistroLogin.php");
		}
	}
?>
