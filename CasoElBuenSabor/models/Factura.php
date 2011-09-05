<?php
require_once 'Comprobante.php';
class Factura extends Comprobante{
    private $_numeroFactura;
    private $_ruc;
    private $_impuesto;
    public function __construct($consumo,$numeroFactura,$ruc){
        parent::__construct($consumo);
        $this->_numeroFactura = $numeroFactura;
        $this->_ruc = $ruc;
        $this->_calcularImpuesto();
    }
    public function getNumeroFactura(){return $this->_numeroFactura;}
    public function getRuc(){return $this->_ruc;}
    public function getImpuesto(){return $this->_impuesto;}
    private function _calcularImpuesto(){
        $this->_impuesto = $this->consumo / 1.18;
    }
    
}

