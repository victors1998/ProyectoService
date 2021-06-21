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
}
