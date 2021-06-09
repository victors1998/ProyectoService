<?php
class Categorias {
    private $idCategoria;
    private $nombreCategoria;
    private $estado;
    
    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdCategoria($idCategoria): void {
        $this->idCategoria = $idCategoria;
    }

    function setNombreCategoria($nombreCategoria): void {
        $this->nombreCategoria = $nombreCategoria;
    }

    function setEstado($estado): void {
        $this->estado = $estado;
    }


    function MostrarCategoria() {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM categoria WHERE estado=1";
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }
}
