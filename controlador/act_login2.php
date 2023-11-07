<?php
        session_start();
        require_once (__DIR__."./mdbUsuario2.php");

	if(isset($_POST['submit'])){
		$errMsg = '';
		//username and password sent from Form
		$username = $_POST['email'];
		$password = $_POST['clave'];
                
                $usuario = autenticarUsuario($email, $clave);
                echo $email;

		if($usuario != null){ // Puede iniciar sesión
                    $_SESSION['ID_USUARIO'] = $usuario->getIdUsuario();
                    $_SESSION['NOMBRE_USUARIO'] = $usuario->getNombreCompleto();
                    $errMsg .= 'Username and Password are dffd found';
                    header("Location:../../../vistas/index.php");
		}else{ // No puede iniciar sesión
                    $errMsg .= 'Username and Password are not found';
                    header("Location:../../../vistas/RegistroLogin.php");
		}
	}
        
        
        // No puede iniciar sesión
       // header("Location: ../../vista/login.html");
        
?>
