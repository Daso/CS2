<?php
require_once '../Logic/ImpuestoLogic.php';
class ImpuestoView {
    public function ejecutar(){
            $miLogic = new ImpuestoLogic();
            $lista = $miLogic->getAll();
            if($_POST['mes'] == null){
                $this->mostrarPantallaIngreso($lista, $listaImpuestos);
            }else{
                $mes = $POST['mes'];
                $saldo = $_POST['saldo'];
                $miLogic->insertar($mes, $saldo);
                $lista = $miLogic->getAll();
                $listaImpuestos = $miLogic->calcularImpuesto();
                $this->mostrarPantallaIngreso($lista, $listaImpuestos);
            }
            
            //echo var_dump($lista);


    }

    public function mostrarPantallaIngreso($lista,$listaImpuestos){
        require_once 'ingresoImpuesto.html';
    }

}

$miView = new ImpuestoView();
$miView->ejecutar();
?>
