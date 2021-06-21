<?php
include '../bd/autoload.php';
class ControllerNegocio {    
    
    function mostrarNegocioId($id) {
        $negocio = new Negocio();
        return $negocio->MostrarNegocioId($id);
    }
    
    function mostrarNegocioIdNegocio() {
        $negocio = new Negocio();
        return $negocio->MostrarNegocioIdNegocio();
    }
    
    function mostrarNegocioIdP($id) {
        $negocio = new Negocio();
        return $negocio->MostrarNegocioIdP($id);
    }
    
    
    
    public function guardarNegocio(array $datos){       
        $negocio = new Negocio();
        if (isset($datos['idnegocio']))
        {            
            $negocio->setId_usuario($datos['idnegocio']);
        }
        $negocio->setNombre($datos['nombre']);
        $negocio->setRuc($datos['ruc']);
        $negocio->setDireccion($datos['direccion']);
        $negocio->setEstado(1);
        $negocio->setUsuario($datos['usuario']);
        $negocio->setFechaRegistro("2021/12/12");
        $negocio->setTelefono($datos['telefono']);
        $negocio->setImagen1($datos['foto1']);
        $negocio->setImagen2($datos['foto2']);       
        $negocio->GuardarNegocio();
    }
}
