<?php
class Productos {
    
    private $idproductos;
    private $id_servicio;
    private $nombre_producto;
    private $descripcion;
    private $estado;
    private $imagen;
    
    function getIdproductos() {
        return $this->idproductos;
    }

    function getId_servicio() {
        return $this->id_servicio;
    }

    function getNombre_producto() {
        return $this->nombre_producto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getEstado() {
        return $this->estado;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setIdproductos($idproductos): void {
        $this->idproductos = $idproductos;
    }

    function setId_servicio($id_servicio): void {
        $this->id_servicio = $id_servicio;
    }

    function setNombre_producto($nombre_producto): void {
        $this->nombre_producto = $nombre_producto;
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }

    function setImagen($imagen): void {
        $this->imagen = $imagen;
    }

    
}
