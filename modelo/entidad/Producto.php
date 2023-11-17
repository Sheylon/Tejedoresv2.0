<?php

class Producto
{
    public $idProducto;
    public $nombre;
    public $descripcion;
    public $unidadesDisponibles;
    public $valorUnidad;
    public $idCategoriaProducto;

    public function __construct($idProducto, $nombre, $descripcion, $unidadesDisponibles, $valorUnidad, $idCategoriaProducto)
    {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->unidadesDisponibles = $unidadesDisponibles;
        $this->valorUnidad = $valorUnidad;
        $this->idCategoriaProducto = $idCategoriaProducto;
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

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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

    public function getIdCategoriaProducto()
    {
        return $this->idCategoriaProducto;
    }

    public function setIdCategoriaProducto($idCategoriaProducto)
    {
        $this->idCategoriaProducto = $idCategoriaProducto;
        return $this;
    }
}
?>
