<?php
include '../bd/autoload.php';
class ControllerUsuarios {
    
    public function guardarUsuario(array $datos){       
        $usuario= new Usuarios();
        if (isset($datos['idUsuario']))
        {            
            $usuario->setId_usuario($datos['idUsuario']);
        }
        $usuario->setNombres($datos['nombres']);
        $usuario->setApellidos($datos['apellidos']);
        $usuario->setTipoUsuario(2);
        $usuario->setUserName($datos['userName']);
        $usuario->setPassword($datos['password']);
        $usuario->setEstado(1);
        $usuario->setDni($datos['dni']);
        $usuario->setTelefono($datos['telefono']); 
        $fechaActual = date('yyyy-mm-dd');
        $usuario->setFechaRegistro($fechaActual);
        $usuario->GuardarUsuario();
    }
    
}
