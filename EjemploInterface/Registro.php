<?php
require_once 'InterfaceImprimible.php';
class Registro implements InterfaceImprimible{
    private $_nombre;

   public function __construct($nombre) {
        $this->_nombre = $nombre;
    }

    public function imprimirme(){

        return $this->_nombre;

    }

}
?>
