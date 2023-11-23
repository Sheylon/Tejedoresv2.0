<?php
    function buscarFotoPorId($id) {
        require_once(__DIR__."/../../modelo/dao/FotoDAO.php");
        $dao = new FotoDAO();
        $foto = $dao->buscarFotoPorId($id);
        return $foto;
    }

    
    function leerFotos() {
        require_once(__DIR__."/../../modelo/dao/FotoDAO.php");
        $dao = new FotoDAO();
        $fotos = $dao->leerFotos();
        return $fotos;
    }

    
    function insertarFoto(Foto $foto) {
        require_once(__DIR__."/../../modelo/dao/FotoDAO.php");
        $dao = new FotoDAO();
        $resultado = $dao->insertarFoto($foto);
        return $resultado;
    }


    function modificarFoto(Foto $foto) {
        require_once(__DIR__."/../../modelo/dao/FotoDAO.php");
        $dao = new FotoDAO();
        $resultado = $dao->modificarFoto($foto);
        return $resultado;
    }

?>