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


    public function ValidarUsuario() {
        include '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();

        try {
            $result = $conn->prepare('SELECT idUsuario, nombres, apellidos, tipoUsuario, username, password, estado, dni, fecha_registro FROM usuario '
                    . 'where username=:nombre'
                    . ' AND password=:password');
            $result->bindParam(":nombre", $this->userName);
            $result->bindParam(":password", $this->password);
            $result->execute();
            $usu = $result->fetch(PDO::FETCH_ASSOC);
            $this->setIdUsuario($usu['idUsuario']);
            $this->setNombres($usu['nombres']);
            $this->setApellidos($usu['apellidos']);
            $this->setTipoUsuario($usu['tipoUsuario']);
            $this->setEstado($usu['estado']);
            $this->setDni($usu['dni']);
            $this->setFechaRegistro($usu['fecha_registro']);

            return $result->rowcount();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        $conexionDB->cerrarConexion();
    }
    
    function GuardarUsuario() {
        require_once '../bd/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        if ((int) $this->idUsuario != 0) {
            $sql = "UPDATE usuario SET "
                    . "nombres='" . $this->nombres. "',"
                    . "apellidos='" . $this->apellidos . "',"
                    . "userName='" . $this->userName . "',"
                    . "password='" . $this->password . "',"
                    . "estado='" . $this->estado . "'," 
                    . "tipoUsuario='" . $this->tipoUsuario . "'"
                    . " WHERE id_usuario=" . $this->idUsuario;
        } else {
            $sql = "INSERT INTO usuario(nombres, apellidos, tipoUsuario, userName,password,estado, dni, telefono, fecha_registro) VALUES "
                    . "('" . $this->nombres . "',"
                    . "'" . $this->apellidos . "',"
                    . "'" . $this->tipoUsuario . "',"
                    . "'" . $this->userName . "',"
                    . "'" . $this->password . "',"
                    . "'" . $this->estado . "',"
                    . "'" . $this->dni . "',"
                    . "'" . $this->telefono . "'," 
                    . "'" . $this->fechaRegistro."'"
                    . ")";
        }

        $conn->query($sql);
        $conexionDB->cerrarConexion();
    }
}
