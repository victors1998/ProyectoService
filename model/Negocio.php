<?php

class Negocio {
    private $idNegocio;
    private $nombre;
    private $ruc;
    private $direccion;
    private $estado;
    private $usuario;
    private $fechaRegistro;
    
    function getIdNegocio() {
        return $this->idNegocio;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getRuc() {
        return $this->ruc;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEstado() {
        return $this->estado;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    function setIdNegocio($idNegocio): void {
        $this->idNegocio = $idNegocio;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setRuc($ruc): void {
        $this->ruc = $ruc;
    }

    function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setFechaRegistro($fechaRegistro): void {
        $this->fechaRegistro = $fechaRegistro;
    }

    function MostrarNegocioId($id) {
        include '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM negocio WHERE usuario_idUsuario=" . $id;
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }
}
