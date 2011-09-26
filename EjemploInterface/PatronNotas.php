<?php
require_once 'InterfaceImprimible.php';
class PatronNotas implements InterfaceImprimible{
    public function imprimirme(){
        return '16, 18, 20, 02';
    }
}

