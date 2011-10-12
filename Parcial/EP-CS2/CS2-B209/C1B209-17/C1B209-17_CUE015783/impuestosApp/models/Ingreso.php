<?php
require_once '../persistence/Persistence.php';
class Ingreso{
    private $_id;
    private $_ingreso;
    private $_mes;
    private $_impuesto;

    function  __construct($id="",$ingreso="", $mes="") {
        $this->_id = $id;
        $this->_ingreso = $ingreso;
        $this->_mes = $mes;
        if($ingreso!="")
            $this->_calcularImpuesto();
    }

    function getIngreso(){return $this->_ingreso;}
    function getMes(){return $this->_mes;}
    function getImpuesto(){return $this->_impuesto;}
    function getId(){return $this->_id;}

    private function _calcularImpuesto(){
        if($this->_ingreso>2500)
            $this->_impuesto = intval($this->_ingreso) * 0.1;                
        else
            $this->_impuesto = intval($this->_ingreso) * 0.7;
    }

    private function _obtenerUltimoImpuesto(){
        return $ultimoImpuesto;
    }

    function getAll(){
        $i = Persistence::getInstancia();
        $impuestos = $i->getAll();
        $array = array();
        foreach($impuestos as $ingreso){
            $id = $ingreso['id'];
            $ing = $ingreso['ingreso'];
            $mes = $ingreso['mes'];            
            $in = new Ingreso($id, $ing, $mes);
            $array[] = $in;
        }
        return $array;
    }

    function calcularImpuestoExtraordinario(){
        $impuestos = $this->getAll();
        if(count($impuestos) == 12){
            $sueldoAcumulado  = 0;
            $extraordinario = 0;
            foreach($impuestos as $impuesto){
                $ingreso = $impuesto->getIngreso();
                $sueldoAcumulado = $sueldoAcumulado + $ingreso;
            }
            if($sueldoAcumulado > 24000){
                $extraordinario = $sueldoAcumulado * 0.30;
            }
            return $extraordinario;
        }
        return 'Faltan ingresos';
    }

    function calcularImpuestoAcumulado(){
        $impuestos = $this->getAll();
        $acumulado = 0;
        foreach($impuestos as $impuesto){
            $impuesto = $impuesto->getImpuesto();
            $acumulado = $acumulado + $impuesto;
        }
        return $acumulado;
    }

    function agregar($i){
        $inst = Persistence::getInstancia();
        $ingreso = $i->getIngreso();
        $mes = $i->getMes();
        $impuesto = $i->getImpuesto();
        return $inst->agregar($ingreso,$mes,$impuesto);
    }
}