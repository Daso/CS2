<?php
require_once 'InterfaceImprimible.php';
class Impresora {
    public function imprimir(InterfaceImprimible $objeto){
        echo $objeto->imprimirme();
    }
}
