<?php
class Servicios {
    private $idServicio;
    private $titulo;
    private $descripcion;
    private $estado;
    private $Usuario;
    private $fechaRegistro;
    private $categoria;
    
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
    
    function MostrarServicios() {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM servicio WHERE estado=1";
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }


}
