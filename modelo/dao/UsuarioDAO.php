<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Usuario.php");

class UsuarioDAO {
    
    public function autenticarUsuario($Correo, $contrasena) {
        $data_source = new DataSource();
    
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE email = :email AND email = :email", 
                                                    array(':email' => $Correo, ':email' => $contrasena));
        
        $usuario = null;
        if (count($data_table) == 1) {
            $usuario = new Usuario(
                $data_table[0]["idUsuario"],
                $data_table[0]["nombre"],
                $data_table[0]["email"],
                $data_table[0]["usuario"],
                $data_table[0]["rol"],
                $data_table[0]["clave"]
            );
            return $usuario;
        } else {
            return null;
        }
    }
    
    public function buscarUsuarioPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE idUsuario = :id", 
                                                    array(':id' => $id));
        $usuario = null;
        if (count($data_table) == 1) {
            $usuario = new Usuario(
                $data_table[0]["idUsuario"],
                $data_table[0]["nombre"],
                $data_table[0]["email"],
                $data_table[0]["usuario"],
                $data_table[0]["rol"],
                $data_table[0]["clave"]
            );
            return $usuario;
        } else {
            return null;
        }
    }    
    
    public function leerUsuarios() {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario");
        $usuarios = array();
        foreach ($data_table as $row) {
            $usuario = new Usuario(
                $row["idUsuario"],
                $row["nombre"],
                $row["email"],
                $row["usuario"],
                $row["rol"],
                $row["clave"]
            );
            array_push($usuarios, $usuario);
        }
        return $usuarios;   
    }
    
    public function insertarUsuario(Usuario $usuario) {
        $data_source = new DataSource();
        $sql = "INSERT INTO usuario (idUsuario, nombre, Correo, usuario, rol, contrasena) 
                VALUES (:idUsuario, :nombre, :Correo, :email, :usuario, :rol, :contrasena)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idUsuario' => $usuario->getIdUsuario(),
            ':nombre' => $usuario->getNombreCompleto(),
            ':email' => $usuario->getCorreo(),
            ':usuario' => $usuario->getUsuario(),
            ':rol' => $usuario->getRol(),
            ':clave' => $usuario->getContrasena()
        ));
        return $resultado;
    }
    
    public function modificarUsuario(Usuario $usuario) {
        $data_source = new DataSource();
        $sql = "UPDATE usuario SET nombre = :nombre, email = :email, usuario = :usuario, 
                rol = :rol, clave = :clave WHERE idUsuario = :idUsuario";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre' => $usuario->getNombreCompleto(),
            ':email' => $usuario->getCorreo(),
            ':usuario' => $usuario->getUsuario(),
            ':rol' => $usuario->getRol(),
            ':password' => $usuario->getContrasena(),
            ':idUsuario' => $usuario->getIdUsuario()
        ));
        
        return $resultado;
    }
    
    public function borrarUsuario($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM usuario WHERE idUsuario = :id", array(':id' => $id));
        
        return $resultado;
    }
}

?>