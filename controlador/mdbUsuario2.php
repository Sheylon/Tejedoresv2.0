<?php

    function autenticarUsuario($email, $clave){
        require_once(__DIR__."/../modelo/dao/usuarioDAO2.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->autenticarUsuario($email, $clave);
        return $usuario;
    }

    function buscarUsuarioPorId($id){
        require_once(__DIR__."/../modelo/dao/UsuarioDAO2.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->buscarUsuarioPorId( $id);
        return $usuario;
    }

    function leerUsuarios(){
        require_once(__DIR__."/../modelo/dao/UsuarioDAO2.php");
        $dao=new UsuarioDAO();
        $usuarios = $dao->leerUsuarios();
        return $usuarios;
    }


    function insertarUsuario($usuario){
        require_once(__DIR__."/../modelo/dao/UsuarioDAO2.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->insertarUsuario($usuario);
        return $resultado;
    }

    function modificarUsuario($usuario){
        require_once(__DIR__."/../modelo/dao/UsuarioDAO2.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->modificarUsuario($usuario);
        return $resultado;
    }

    function borrarUsuario($id){
        require_once(__DIR__."/../model/DAO/UsuarioDAO2.php");
        $dao = new UsuarioDAO();
        $res=$dao->borrarUsuario($id);
        return $res;
    }     