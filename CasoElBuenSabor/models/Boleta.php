<?php
require_once 'Comprobante.php';
class Boleta extends Comprobante {
    private $_numeroBoleta;
    public function __construct($consumo, $numeroBoleta) {
        parent::__construct($consumo);
        $this->_numeroBoleta = $numeroBoleta;
        
        
    }
    public function getNumeroBoleta(){
        return $this->_numeroBoleta;
    }
   
}

