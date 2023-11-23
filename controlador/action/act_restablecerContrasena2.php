<?php
session_start();
require_once (__DIR__. "/../mdb/mdbUsuario.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar el correo electrónico enviado desde el formulario
    
    $errMsg = '';
    //username and password sent from Form
    $correo = $_POST['correo'];
    $usuario = autenticarUsuarioCorreo($correo);
    echo $correo;
    if($usuario != null){ // Puede iniciar sesión
        $_SESSION['ID_USUARIO'] = $usuario->getIdUsuario();
        $_SESSION['NOMBRE_USUARIO'] = $usuario->getNombreCompleto(); 
        $_SESSION['CORREO_USUARIO'] = $usuario->getCorreo();
        $_SESSION['USUARIO'] = $usuario->getUsuario();
        $_SESSION['ROL_USUARIO'] = $usuario->getRol();
        $_SESSION['CONTRASENA_USUARIO'] = $usuario->getContrasena();

        echo 'Conectado exitosamente a la Base de Datos';
    }


    // Generar un token único para la validación
    $token = bin2hex(random_bytes(32));

     // Generar el dominio adecuado según el entorno
    $dominio = ($_SERVER['SERVER_NAME'] == 'localhost') ? 'http://localhost/TejedoresV2.0' : 'http://tudominio.com';

     // Enviar el correo electrónico con el enlace de validación
    $to = $correo;
    $subject = "Restablecer contraseña";
    $message = "Para restablecer tu contraseña, haz clic en el siguiente enlace:\n\n";
    $message .= "$dominio/vistas\cambiarContrasena.php";

    $headers = "From: yeimercampoparada@email.com" . "\r\n" .
            "Reply-To: yeimercampoparada@email.com" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    echo "Se ha enviado un enlace de restablecimiento a tu correo electrónico. Por favor, revisa tu bandeja de entrada.";
} else {
    echo "Acceso no autorizado.";
}
?>


