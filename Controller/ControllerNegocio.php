<?php
include '../bd/autoload.php';
class ControllerNegocio {    
    
    function mostrarNegocioId($id) {
        $negocio = new Negocio();
        return $negocio->MostrarNegocioId($id);
    }
}
