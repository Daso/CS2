<?php

require_once '../Model/Impuesto.php';

abstract class Controlador {
    
    public function calcularImpMensual($ingreso){
        if($ingreso>2500){
            $impMensual=$ingreso*0.01;
        }else{
            $impMensual=$ingreso*0.007;
        }
        return $impMensual;
    }

    public function calcularImpAcAnual($impAcAnterior, $impMensual){
        $impAcActual = $impAcAnterior + $impMensual;
        return $impAcActual;
    }

    public function calcularImpExtraordinario($impAcAnual){
        if($impAcAnual>24000){
            $restante = $impAcAnual - 24000;
            $impExtraordinario = $restante * 0.3;
            return $impExtradordinario;
        }
    }

}