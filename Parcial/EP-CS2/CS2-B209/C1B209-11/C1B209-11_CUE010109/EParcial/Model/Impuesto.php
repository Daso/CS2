<?php

require_once '../Persistence/Persistence.php';

class Impuesto {
    private $_anho;
    private $_mes;
    private $_ingreso;
    private $_impMensual;
    private $_impAcAnual;

    public function __construct($anho, $mes, $ingreso, $impMes, $impAcAnual) {
        $this->_anho=$anho;
        $this->_mes=$mes;
        $this->_ingreso=$ingreso;
        $this->_impMensual=$impAnual;
        $this->_impAcAnual=$impAcAnual;
    }

    public function getAll(){
        $instancia = Persistence::getInstancia();
        $rs=$instancia->getAll();
        $lista = array();
        foreach($rs as $item){
            $lista[]= new Impuesto($anho, $mes, $ingreso, $impMes, $impAcAnual);
        }
        return $lista[];
    }

    public function getAnho() {
        return $this->_anho;
    }

    public function getMes() {
        return $this->_mes;
    }

    public function getIngreso() {
        return $this->_ingreso;
    }

    public function getimpMesual() {
        return $this->_impMensual;
    }

    public function getAcAnual() {
        return $this->_impAcAnual;
    }

}
?>
