<?php

class Servicios {

    private $idServicio;
    private $titulo;
    private $descripcion;
    private $estado;
    private $fechaRegistro;
    private $categoria;
    private $idNegocio;
    private $imagen1;
    
    
    
    function getImagen1() {
        return $this->imagen1;
    }

    function setImagen1($imagen1): void {
        $this->imagen1 = $imagen1;
    }

    
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
    
    function GuardarServicio() {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        if ((int) $this->idServicio != 0) {
            $sql = "UPDATE servicio SET "
                    . "titulo='" . $this->titulo. "',"
                    . "descripcion='" . $this->descripcion . "',"
                    . "estado='" . $this->estado . "',"               
                    . "categoria='" . $this->categoria. "'," 
                    . "idNegocio='" . $this->idNegocio . "'"
                    . "imagen1='" . $this->imagen1 . "'"
                    
                    . " WHERE idnegocio=" . $this->idnegocio;
        } else {
            $sql = "INSERT INTO servicio(titulo, descripcion,fecha_registro, id_categoria,idnegocio,estado, imagen1) VALUES "
                    . "('" . $this->titulo . "',"
                    . "'" . $this->descripcion . "',"
                    . "'" . $this->fechaRegistro . "',"
                    . "'" . $this->categoria . "',"
                    . "'" . $this->idNegocio . "',"
                    . "'" . $this->estado . "',"
                    . "'" . $this->telefono . "',"
                    . "'" . $this->imagen1 . "'," 
          
                    . ")";
        }

        $conn->query($sql);
        $conexionDB->cerrarConexion();
    }

}
