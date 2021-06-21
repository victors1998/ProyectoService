<?php

class Servicios {

    private $idServicio;
    private $titulo;
    private $descripcion;
    private $estado;
    private $Usuario;
    private $fechaRegistro;
    private $categoria;
    private $idNegocio;

    function getIdServicio() {
        return $this->idServicio;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getEstado() {
        return $this->estado;
    }

    function getUsuario() {
        return $this->Usuario;
    }

    function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getIdNegocio() {
        return $this->idNegocio;
    }

    function setIdServicio($idServicio): void {
        $this->idServicio = $idServicio;
    }

    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }

    function setUsuario($Usuario): void {
        $this->Usuario = $Usuario;
    }

    function setFechaRegistro($fechaRegistro): void {
        $this->fechaRegistro = $fechaRegistro;
    }

    function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    function setIdNegocio($idNegocio): void {
        $this->idNegocio = $idNegocio;
    }

    function MostrarServicios() {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM servicio WHERE estado=1";
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }

    function MostrarServiciosPorIdNegocio($id) {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT s.idServicio, s.titulo, s.descripcion, c.nombre_categoria, s.idnegocio
                FROM servicio as s INNER JOIN
                categoria as c ON s.id_categoria=c.idcategoria WHERE s.idnegocio=" . $id;
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }
    
    function MostrarServiciosPorIdCategoria($id) {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM servicio WHERE id_categoria=".$id;
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }

}
