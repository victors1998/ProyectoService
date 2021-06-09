<?php
include '../bd/autoload.php';
class ControllerCategoria {
    
    public function mostrarCategoria() {
        $categoria = new Categorias();
        return $categoria->MostrarCategoria();
    }
}
