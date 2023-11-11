<?php

class TipoProducto {

    private $idTipoProducto;
    private $nombreTipoProducto;

    public function __construct($idTipoProducto, $nombreProducto) {
        $this->idTipoProducto = $idTipoProducto;
        $this->nombreTipoProducto = $nombreProducto;
    }

   
    public function getIdTipoProducto() {
        return $this->idTipoProducto;
    }

    public function getNombreProducto() {
        return $this->nombreTipoProducto;
    }


    public function setIdTipoProducto($idTipoProducto) {
        $this->idTipoProducto = $idTipoProducto;
        return $this;
    }


    public function setNombreProducto($nombreProducto) {
        $this->nombreTipoProducto = $nombreProducto;
        return $this;
    }
}

?>
