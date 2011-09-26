<?php
require_once 'InterfaceImprimible.php';
class Texto implements InterfaceImprimible {
    public function imprimirme(){
        return 'Esto es un texto';
    }
}
