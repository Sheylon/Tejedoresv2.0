<?php
class Producto
{
    private $idProducto;
    private $nombreProducto;
    private $descripcion;
    private $unidadesDisponibles;
    private $valorUnidad;
    private $idColor;
    private $idTalla;
    private $idFoto;
    private $idTipoProducto;

    public function __construct($idProducto, $nombreProducto, $descripcion, $unidadesDisponibles, $valorUnidad, $idColor, $idTalla, $idFoto, $idTipoProducto)
    {
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->descripcion = $descripcion;
        $this->unidadesDisponibles = $unidadesDisponibles;
        $this->valorUnidad = $valorUnidad;
        $this->idColor = $idColor;
        $this->idTalla = $idTalla;
        $this->idFoto = $idFoto;
        $this->idTipoProducto = $idTipoProducto;
    }

    public function getIdProducto()
    {
        return $this->idProducto;
    }

    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;
        return $this;
    }

    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getUnidadesDisponibles()
    {
        return $this->unidadesDisponibles;
    }

    public function setUnidadesDisponibles($unidadesDisponibles)
    {
        $this->unidadesDisponibles = $unidadesDisponibles;
        return $this;
    }

    public function getValorUnidad()
    {
        return $this->valorUnidad;
    }

    public function setValorUnidad($valorUnidad)
    {
        $this->valorUnidad = $valorUnidad;
        return $this;
    }

    public function getIdColor()
    {
        return $this->idColor;
    }

    public function setIdColor($idColor)
    {
        $this->idColor = $idColor;
        return $this;
    }

    public function getIdTalla()
    {
        return $this->idTalla;
    }

    public function setIdTalla($idTalla)
    {
        $this->idTalla = $idTalla;
        return $this;
    }

    public function getIdFoto()
    {
        return $this->idFoto;
    }

    public function setIdFoto($idFoto)
    {
        $this->idFoto = $idFoto;
        return $this;
    }

    public function getIdTipoProducto()
    {
        return $this->idTipoProducto;
    }

    public function setIdTipoProducto($idTipoProducto)
    {
        $this->idTipoProducto = $idTipoProducto;
        return $this;
    }
}
?>