<?php

class Talla {

    private $idTalla;
    private $talla;

    public function __construct($idTalla, $talla) {
        $this->idTalla = $idTalla;
        $this->talla = $talla;
    }

    public function getIdTalla() {
        return $this->idTalla;
    }

    public function getTalla() {
        return $this->talla;
    }

    public function setIdTalla($idTalla) {
        $this->idTalla = $idTalla;
        return $this;
    }

    public function setTalla($talla) {
        $this->talla = $talla;
       return $this;
    }
}

?>
