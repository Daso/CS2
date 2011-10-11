<?php
require_once '../control/Logic.php';
class View {
    public function ejecutar(){
        $impLogic =  new Logic(); 
        if($_GET['opcion'] == null){
            $impLogic->getAll();
            $lista = $impLogic;
            $this->mostrarDefault($lista);
        }
        else{
            $mes = $_POST['mes'];
            $ingresos = $_POST['ingresos'];
            $total += $_POST['ingresos'];
            $impLogic = new Logic();
            $impLogic->ingresar($mes, $ingresos, $total);
        }
    }
    
    public function mostrarDefault($lista){
        require_once 'Default.html';
    }
}

$miImpuesto = new View();
$miImpuesto->ejecutar();