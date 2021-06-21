<?php

class Negocio {
    private $idNegocio;
    private $nombre;
    private $ruc;
    private $direccion;
    private $estado;
    private $usuario;
    private $fechaRegistro;
    private $telefono;
    private $imagen1;
    private $imagen2;
    
    function getTelefono() {
        return $this->telefono;
    }

    function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

        
    function getImagen1() {
        return $this->imagen1;
    }

    function getImagen2() {
        return $this->imagen2;
    }

    function setImagen1($imagen1): void {
        $this->imagen1 = $imagen1;
    }

    function setImagen2($imagen2): void {
        $this->imagen2 = $imagen2;
    }

                
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
        $sql = "SELECT * FROM negocio WHERE idUsuario=" . $id;
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }
    
    function MostrarNegocioIdNegocio() {
        include '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM negocio";
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }
    
    function MostrarNegocioIdP($id) {
        include '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM negocio WHERE idnegocio=".$id;
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }
    function GuardarNegocio() {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        if ((int) $this->idNegocio != 0) {
            $sql = "UPDATE Negocio SET "
                    . "nombre='" . $this->nombre. "',"
                    . "ruc='" . $this->ruc . "',"
                    . "direccion='" . $this->direccion . "',"
                    . "telefono='" . $this->telefono . "',"                   
                    . "imagen1='" . $this->imagen1 . "'," 
                    . "imagen2='" . $this->imagen2 . "'"
                    
                    . " WHERE idnegocio=" . $this->idnegocio;
        } else {
            $sql = "INSERT INTO negocio(nombre, ruc, direccion, estado, idUsuario,fecha_registro, telefono,imagen1,imagen2) VALUES "
                    . "('" . $this->nombre . "',"
                    . "'" . $this->ruc . "',"
                    . "'" . $this->direccion . "',"
                    . "'" . $this->estado . "',"
                    . "'" . $this->usuario . "',"
                    . "'" . $this->fechaRegistro . "',"
                    . "'" . $this->telefono . "',"
                    . "'" . $this->imagen1 . "'," 
                    . "'" . $this->imagen2."'"
                    . ")";
        }

        $conn->query($sql);
        $conexionDB->cerrarConexion();
    }
}
