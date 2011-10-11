<?php
require_once '../model/Impuestos.php';
class Logic {

    public function getAll(){
        try {
            $impArray = array();
            $lista = new Impuestos();
            $impArray = $lista->getAll();

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function ingresar($mes,$ingresos,$total){
        $imp = new Impuestos($mes, $ingresos, $total);
        $imp->ingresar($mes, $ingresos,$total);
    }
    
}

