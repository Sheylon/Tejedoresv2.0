<?php

class Color {

    private $idColor;
    private $color;

    public function __construct($idColor, $color) {
        $this->idColor = $idColor;
        $this->color = $color;
    }

    public function getIdColor() {
        return $this->idColor;
    }

    public function getColor() {
        return $this->color;
    }

    public function setIdColor($idColor) {
        $this->idColor = $idColor;
        return $this;

    }

    public function setColor($color) {
        $this->color = $color;
        return $this;

    }
}

?>
