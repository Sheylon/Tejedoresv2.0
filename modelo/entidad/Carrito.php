<?php

class Carrito
{
    public $idCarrito;
    public $fechaYHora;
    public $idUsuario;

    public function __construct($idCarrito, $fechaYHora, $idUsuario)
    {
        $this->idCarrito = $idCarrito;
        $this->fechaYHora = $fechaYHora;
        $this->idUsuario = $idUsuario;
    }

    public function getIdCarrito()
    {
        return $this->idCarrito;
    }

    public function setIdCarrito($idCarrito)
    {
        $this->idCarrito = $idCarrito;
        return $this;
    }

    public function getFechaYHora()
    {
        return $this->fechaYHora;
    }

    public function setFechaYHora($fechaYHora)
    {
        $this->fechaYHora = $fechaYHora;
        return $this;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }
}
?>
