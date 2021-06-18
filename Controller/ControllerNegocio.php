<?php
include '../bd/autoload.php';
class ControllerNegocio {    
    
    function mostrarNegocioId($id) {
        $negocio = new Negocio();
        return $negocio->MostrarNegocioId($id);
    }
    
    function mostrarNegocioIdServicio($id) {
        $negocio = new Negocio();
        return $negocio->MostrarNegocioId($id);
    }
}
