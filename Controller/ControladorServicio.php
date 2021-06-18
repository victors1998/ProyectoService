<?php

include '../bd/autoload.php';
class ControladorServicio {
   public function mostrarServicio() {
        $servicio = new Servicios();
        return $servicio->MostrarServicios();
    }
    
    function mostrarServicioPorIdNegocio($id) {
        $servicio = new Servicios();
        return $servicio->MostrarServiciosPorIdNegocio($id);
    }
    
    function mostrarServicioPorIdCategoria($id) {
        $servicio = new Servicios();
        return $servicio->MostrarServiciosPorIdCategoria($id);
    }
}
