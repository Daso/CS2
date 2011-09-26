<?php
require_once 'InterfaceImprimible.php';
class PaginaHTML implements InterfaceImprimible{
    public function imprimirme(){
        return '<h1> Esto es HTML </h1>';
    }
}
?>
