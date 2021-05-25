<?php
class Usuarios {
    private $idUsuario;
    private $nombres;
    private $apellidos;
    private $tipoUsuario;
    private $userName;
    private $password;
    private $estado;
    private $dni;
    private $telefono;
    private $fechaRegistro;
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    function getUserName() {
        return $this->userName;
    }

    function getPassword() {
        return $this->password;
    }

    function getEstado() {
        return $this->estado;
    }

    function getDni() {
        return $this->dni;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    function setNombres($nombres): void {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    function setTipoUsuario($tipoUsuario): void {
        $this->tipoUsuario = $tipoUsuario;
    }

    function setUserName($userName): void {
        $this->userName = $userName;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }

    function setDni($dni): void {
        $this->dni = $dni;
    }

    function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    function setFechaRegistro($fechaRegistro): void {
        $this->fechaRegistro = $fechaRegistro;
    }


}
