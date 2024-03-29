<?php
require_once(__DIR__ . "/DataSource.php");
require_once(__DIR__ . "/../entidad/Usuario.php");

class UsuarioDAO {

    
    public function autenticarUsuario($correo, $contrasena) {
        $data_source = new DataSource();
    
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE correo = :correo AND contrasena = :contrasena", 
                                                    array(':correo' => $correo, ':contrasena' => $contrasena));
        
        $usuario = null;
        if (count($data_table) == 1) {
            $usuario = new Usuario(
                $data_table[0]["idusuario"],
                $data_table[0]["nombre_completo"],
                $data_table[0]["correo"],
                $data_table[0]["usuario"],
                $data_table[0]["rol"],
                $data_table[0]["contrasena"]
            );
            return $usuario;
        } else {
            return null;
        }
    }
    public function autenticarUsuarioCorreo($correo) {
        $data_source = new DataSource();
    
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE correo = :correo", 
                                                    array(':correo' => $correo));
        
        $usuario = null;
        if (count($data_table) == 1) {
            $usuario = new Usuario(
                $data_table[0]["idusuario"],
                $data_table[0]["nombre_completo"],
                $data_table[0]["correo"],
                $data_table[0]["usuario"],
                $data_table[0]["rol"],
                $data_table[0]["contrasena"]
            );
            return $usuario;
        } else {
            return null;
        }
    }
    
    public function buscarUsuarioPorId($id) {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE idusuario = :id", 
                                                    array(':id' => $id));
        $usuario = null;
        if (count($data_table) == 1) {
            $usuario = new Usuario(
                $data_table[0]["idusuario"],
                $data_table[0]["nombre_completo"],
                $data_table[0]["correo"],
                $data_table[0]["usuario"],
                $data_table[0]["rol"],
                $data_table[0]["contrasena"]
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
                $row["idusuario"],
                $row["nombre_completo"],
                $row["correo"],
                $row["usuario"],
                $row["rol"],
                $row["contrasena"]
            );
            array_push($usuarios, $usuario);
        }
        return $usuarios;   
    }
    
  
    public function insertarUsuario(Usuario $usuario) {
        $data_source = new DataSource();
        $sql = "INSERT INTO usuario VALUES (:idusuario, :nombre_completo, :correo, :usuario, :rol, :contrasena)";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idusuario' => $usuario->getIdUsuario(),
            ':nombre_completo' => $usuario->getNombreCompleto(),
            ':correo' => $usuario->getCorreo(),
            ':usuario' => $usuario->getUsuario(),
            ':rol' => $usuario->getRol(),
            ':contrasena' => $usuario->getContrasena()
        ));
        return $resultado;
    }
    
    public function modificarUsuario(Usuario $usuario) {
        $data_source = new DataSource();

        $sql = "UPDATE usuario SET nombre_completo = :nombre_completo, correo = :correo, usuario = :usuario, 
                rol = :rol, contrasena = :contrasena WHERE idusuario = :idusuario";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre_completo' => $usuario->getNombreCompleto(),
            ':correo' => $usuario->getCorreo(),
            ':usuario' => $usuario->getUsuario(),
            ':rol' => $usuario->getRol(),
            ':contrasena' => $usuario->getContrasena(),
            ':idusuario' => $usuario->getIdUsuario()
        ));
        
        return $resultado;
    }
    
    public function borrarUsuario($id) {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM usuario WHERE idusuario = :id", array(':id' => $id));
        
        return $resultado;
    }
    public function modificarContrasenaUsuario(Usuario $usuario) {
        $data_source = new DataSource();

        $sql = "UPDATE usuario SET correo = :correo, contrasena = :contrasena 
        WHERE correo = :correo";
        
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':nombre_completo' => $usuario->getNombreCompleto(),
            ':correo' => $usuario->getCorreo(),
            ':usuario' => $usuario->getUsuario(),
            ':rol' => $usuario->getRol(),
            ':contrasena' => $usuario->getContrasena(),
            ':idusuario' => $usuario->getIdUsuario()
        ));
        
        return $resultado;
    }
}

?>