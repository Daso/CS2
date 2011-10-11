<?php
require_once '../model/Impuesto.php';
class ImpuestoLogic {
    public function getAll(){
        $miImpuesto = new Impuesto();
        $lista = $miImpuesto->getAll();
        return $lista;
    }

    public function insertar($mes, $saldo){
        $miImpuesto = new Impuesto();
        $miImpuesto->insertar($mes, $saldo);
    }

    public function calcularImpuesto(){
        $listaImpuestos = array();
        $misIngresos = $this->getAll();
        foreach($misIngresos as $ingreso){
            if($ingreso->getSaldo() < 2500 ){
                $listaImpuestos[] = ($ingreso->getSaldo()*(0.70/100));
            }else{
                $listaImpuestos[] = ($ingreso->getSaldo()*(1.0/100));
            }
        }
        return $listaImpuestos;
    }

    public function calcularImpuestoAnual(){
        $impuestoAnual = null;
        $misIngresos = $this->getAll();
        foreach($misIngresos as $ingreso){
            $impuestoAnual = $impuestoAnual + $ingreso->getSaldo();
        }
        return $impuestoAnual;
    }
}
?>
