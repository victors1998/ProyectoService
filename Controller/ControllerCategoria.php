<?php
include '../bd/autoload.php';
class ControllerCategoria {
    
    public function mostrarCategoria() {
        $categoria = new Categorias();
        return $categoria->MostrarCategoria();
    }
    
    public function mostrarCategoriaPorId($id) {
        $categoria = new Categorias();
        return $categoria->MostrarCategoriaPorId($id);
    }
}
