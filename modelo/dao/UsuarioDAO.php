<?php 

function login($correo, $contrasena){
    
    $nombre = null;
    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");
    $result = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
    email = '$correo' and clave= '$contrasena'");

    if(mysqli_num_rows($result) == 1){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $nombre = $row["nombre"];
    }

    return $nombre;
}
?>