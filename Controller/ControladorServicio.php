<?php

include '../bd/autoload.php';
class ControladorServicio {
   public function mostrarServicio() {
        $servicio = new Servicios();
        return $servicio->MostrarServicios();
    }
}
