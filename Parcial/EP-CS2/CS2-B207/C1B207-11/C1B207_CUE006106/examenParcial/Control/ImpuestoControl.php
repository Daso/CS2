<?php
require_once '../Model/Impuesto.php';
class ImpuestoControl {

    public function getAll(){
        $imp = new Impuesto();
        $lista = $imp->getAll();
        return $lista;
    }

    public function insertar($ingresoMensual, $impuestoMensual, $acumlado, $extra){
        $imp = new Impuesto();
        $imp->insertar();
    }

    public function calcularImpuestoMensual(){
        $imp = new Impuesto();
        if($imp->getIngresoMensual() < 2500){
        $impMensual = $imp->getIngresoMensual() *0.007;
        $imp->setImpuestoMensual($impMensual);
        }
        else{
           $impMensual = $imp->getIngresoMensual() *0.01;
        $imp->setImpuestoMensual($impMensual);
        }
    }

    public function calcularAcumulado(){
        $imp = new Impuesto();
        $acumulado = $imp->getAcumuladoMensual();
        $imp->setAcumuladoMensual($acumulado);
    }

    public function calcularExtra(){
        $imp = new Impuesto();
        $acumulado = $imp->getAcumuladoMensual();
        $imp->setImpuestoExtra($impExtra);
    }
}
?>
