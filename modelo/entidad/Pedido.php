<?php

class Pedido
{
    public $idPedido;
    public $fechaYHora;
    public $estado;
    public $idCarrito;
    public $idUsuario;

    public function __construct($idPedido, $fechaYHora, $estado, $idCarrito, $idUsuario)
    {
        $this->idPedido = $idPedido;
        $this->fechaYHora = $fechaYHora;
        $this->estado = $estado;
        $this->idCarrito = $idCarrito;
        $this->idUsuario = $idUsuario;
    }

    public function getIdPedido()
    {
        return $this->idPedido;
    }

    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;
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

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
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
