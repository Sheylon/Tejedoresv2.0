<?php

class CategoriaProducto
{
    public $idCategoriaProducto;
    public $nombre;
    public $descripcion;

    public function __construct($idCategoriaProducto, $nombre, $descripcion)
    {
        $this->idCategoriaProducto = $idCategoriaProducto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
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
}
?>
