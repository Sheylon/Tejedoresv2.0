<?php

class DetallePedido
{
    public $idDetallePedido;
    public $idPedido;
    public $idProduto;
    public $cantidad;

    public function __construct($idDetallePedido, $idPedido, $idProduto, $cantidad)
    {
        $this->idDetallePedido = $idDetallePedido;
        $this->idPedido = $idPedido;
        $this->idProduto = $idProduto;
        $this->cantidad = $cantidad;
    }

    public function getIdDetallePedido()
    {
        return $this->idDetallePedido;
    }

    public function setIdDetallePedido($idDetallePedido)
    {
        $this->idDetallePedido = $idDetallePedido;
        return $this;
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

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
        return $this;
    }
}
?>
