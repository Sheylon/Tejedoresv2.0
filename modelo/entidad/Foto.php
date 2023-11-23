<?php

class Foto {

    private $idFoto;
    private $urlFoto;
    private $idProducto;

    public function __construct($idFoto, $urlFoto, $idProducto) {
        $this->idFoto = $idFoto;
        $this->urlFoto = $urlFoto;
        $this->idProducto = $idProducto;
    }

    public function getIdFoto() {
        return $this->idFoto;
    }

    public function getUrlFoto() {
        return $this->urlFoto;
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function setIdFoto($idFoto) {
        $this->idFoto = $idFoto;
    }

    public function setUrlFoto($urlFoto) {
        $this->urlFoto = $urlFoto;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

}

?>
