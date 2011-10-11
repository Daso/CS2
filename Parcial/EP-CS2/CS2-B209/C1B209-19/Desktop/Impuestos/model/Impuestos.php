<?php
require_once '../pesistence/Persistence.php';
class Impuestos {
    private $_id;
    private $_mes;
    private $_ingresos;
    private $_impMes;
    private $_total;

    public function __construct($id="",$mes="",$ingresos="",$total="") {
        $this->_id = $id;
        $this->_mes = $mes;
        $this->_ingresos = $ingresos;
        $this->_total = $total;
    }

    public function getId(){
        return $this->_id;
    }

    public function getMes(){
        return $this->_mes;
    }

    public function getIngresos(){
        return $this->_ingresos;
    }

    public function getImpMes(){
        if($this->_ingresos > 2500){
            return $this->_impMes = $this->_ingresos*0.01;
        }
        else{
            return $this->_impMes = $this->_ingresos*0.007;
        }
    }
    public function getTotal(){
        return $this->_total;
    }

    public function getAll(){
        $impArray = array();
        $lista = Persistence::getInstance();
        $filas = $lista->getAll();

        foreach($filas as $objeto){
            $id = $objeto['id'];
            $mes = $objeto['mes'];
            $ingresos = $objeto['ingresos'];
            $total = $objeto['total'];
            $impArray[] = new Impuestos($id, $mes, $ingresos, $total);
        }

        return $impArray;
    }

    public function ingresar($mes,$ingresos,$impMes,$total){
        $imp = Persistence::getInstance();
        $imp->ingresar($mes,$ingresos,$impMes,$total);
    }
}


