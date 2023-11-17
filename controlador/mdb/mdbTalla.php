<?php

require_once(__DIR__."/../../modelo/dao/tallaDAO.php");

function leerTallas() {
    $dao = new TallaDAO();
    $tallas = $dao->leerTallas();
    return $tallas;
}

function insertarTalla($idProducto, $talla) {
    $dao = new TallaDAO();
    $resultado = $dao->insertarTalla($idProducto, $talla);
    return $resultado;
}

function modificarTalla($talla) {
    $dao = new TallaDAO();
    $resultado = $dao->modificarTalla($talla);
    return $resultado;
}

function borrarTalla($id) {
    $dao = new TallaDAO();
    $res = $dao->borrarTalla($id);
    return $res;
}

?>
