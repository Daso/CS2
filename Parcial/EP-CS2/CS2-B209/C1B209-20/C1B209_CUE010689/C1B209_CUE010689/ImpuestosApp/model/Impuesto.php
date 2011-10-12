<?php
require_once '../Persistence/Persistence.php';
class Impuesto {
    //el saldo es el monto que se ingresara
    private $_mes;
    private $_saldo;

    public function __construct($mes="", $saldo=""){
        $this->_mes = $mes;
        $this->_saldo = $saldo;
    }

    public function getMes(){return $this->_mes;}
    public function getSaldo(){return $this->_saldo;}

    public function getAll(){
        $listaImpuestos = array();
        $misImpuestos = new Persistence();
        $misImpuestos->getInstancia();
        $lista = $misImpuestos->getAll();
        foreach($lista as $impuesto){
            $mes = $impuesto['mes'];
            $saldo = $impuesto['saldo'];
            $listaImpuestos[] = new Impuesto($mes, $saldo);
        }
        //echo var_dump($listaImpuestos);
        return $listaImpuestos;
    }

    public function insertar($mes, $saldo){
        $misImpuestos = new Persistence();
        $misImpuestos->getInstancia();
        $misImpuestos->insertar($mes, $saldo);
    }
}

?>
