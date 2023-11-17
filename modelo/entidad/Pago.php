<?php

class Pago
{
    public $idPago;
    public $metodoPago;
    public $infoTarjeta;
    public $totalPago;
    public $fechaYHora;
    public $idPedido;

    public function __construct($idPago, $metodoPago, $infoTarjeta, $totalPago, $fechaYHora, $idPedido)
    {
        $this->idPago = $idPago;
        $this->metodoPago = $metodoPago;
        $this->infoTarjeta = $infoTarjeta;
        $this->totalPago = $totalPago;
        $this->fechaYHora = $fechaYHora;
        $this->idPedido = $idPedido;
    }

    public function getIdPago()
    {
        return $this->idPago;
    }

    public function setIdPago($idPago)
    {
        $this->idPago = $idPago;
        return $this;
    }

    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    public function setMetodoPago($metodoPago)
    {
        $this->metodoPago = $metodoPago;
        return $this;
    }

    public function getInfoTarjeta()
    {
        return $this->infoTarjeta;
    }

    public function setInfoTarjeta($infoTarjeta)
    {
        $this->infoTarjeta = $infoTarjeta;
        return $this;
    }

    public function getTotalPago()
    {
        return $this->totalPago;
    }

    public function setTotalPago($totalPago)
    {
        $this->totalPago = $totalPago;
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

    public function getIdPedido()
    {
        return $this->idPedido;
    }

    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;
        return $this;
    }
}
?>
