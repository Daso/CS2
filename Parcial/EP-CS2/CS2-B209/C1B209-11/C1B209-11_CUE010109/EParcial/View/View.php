<?php
class View {
    public function ejecutar() {
        if($_POST['ingreso']==null){
            $this->mostrarFormulario();
        }
    }

    public function mostrarFormulario() {
        require_once 'Formulario.html';
    }

    public function mostrarResultados() {
        require_once 'Resultados.html';
    }
}
$miVista = new View();
$miVista->ejecutar();
