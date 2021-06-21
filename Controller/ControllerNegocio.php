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
        $negocio= new Negocios();
        if (isset($datos['idNegocio']))
        {            
            $negocio->setId_usuario($datos['idNegocio']);
        }
        $negocio->setNombres($datos['nombres']);
        $negocio->setApellidos($datos['apellidos']);
        $negocio->setTipoUsuario(2);
        $negocio->setUserName($datos['userName']);
        $negocio->setPassword($datos['password']);
        $negocio->setEstado(1);
        $negocio->setDni($datos['dni']);
        $negocio->setTelefono($datos['telefono']); 
        $fechaActual = date('yyyy-mm-dd');
        $negocio->setFechaRegistro($fechaActual);
        $negocio->GuardarNegocio();
    }
}
