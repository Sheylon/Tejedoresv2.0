<?php

class Producto
{
    private $idProducto;
    private $nombre;
    private $descripcion;
    private $unidadesDisponibles;
    private $valorUnidad;
    private $idCategoriaProducto;
    private $idTalla;
    private $idUsuario;

    // Constructor
    public function __construct($idProducto, $nombre, $descripcion, $unidadesDisponibles, $valorUnidad, $idCategoriaProducto, $idTalla, $idUsuario) {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->unidadesDisponibles = $unidadesDisponibles;
        $this->valorUnidad = $valorUnidad;
        $this->idCategoriaProducto = $idCategoriaProducto;
        $this->idTalla = $idTalla;
        $this->idUsuario = $idUsuario;
    }

    // Getter methods
    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getUnidadesDisponibles() {
        return $this->unidadesDisponibles;
    }

    public function getValorUnidad() {
        return $this->valorUnidad;
    }

    public function getIdCategoriaProducto() {
        return $this->idCategoriaProducto;
    }

    public function getIdTalla() {
        return $this->idTalla;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }


    // Setter methods
    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setUnidadesDisponibles($unidadesDisponibles) {
        $this->unidadesDisponibles = $unidadesDisponibles;
    }

    public function setValorUnidad($valorUnidad) {
        $this->valorUnidad = $valorUnidad;
    }

    public function setIdCategoriaProducto($idCategoriaProducto) {
        $this->idCategoriaProducto = $idCategoriaProducto;
    }

    public function setIdTalla($idTalla) {
        $this->idTalla = $idTalla;
    }


    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

}
?>
