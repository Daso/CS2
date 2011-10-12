<?php
require_once '../Persistencia/Persistencia.php';
class Impuesto {
    private $_id;
    private $_mes;
    private $_ingreso;
    private $_impuesto;

    function __construct($id="", $mes="", $ingreso="", $impuesto="") {
        $this->_id = $id;
        $this->_mes = $mes;
        $this->_ingreso = $ingreso;
        $this->_impuesto = $impuesto;
    }

    public function getId() { return $this->_id; }

    public function getMes() { return $this->_mes; }

    public function getIngreso() { return $this->_ingreso; }

    public function getImpuesto() { return $this->_impuesto; }

    public function __toString() {
        return $this->_mes;
    }

    public function findInfo() {
        $impArray = array();
        $miPersistencia = Persistencia::getInstancia();
        $lista = $miPersistencia->findInfo();
        foreach ($lista as $imp) {
            $id = $imp['id'];
            $mes = $imp['mes'];
            $ingreso = $imp['ingreso'];
            $impuesto = $imp['impuesto'];
            $impArray[] = new Impuesto($id, $mes, $ingreso, $impuesto);
        }
        return $impArray;
    }

    public function addImpuesto() {
        if($this->_ingreso <= 2500){
            $this->_impuesto = $this->_ingreso*0.007;
        }else{
            $this->_impuesto = $this->_ingreso*0.1;
        }
        $miPersistencia = Persistencia::getInstancia();
        $miPersistencia->addImpuesto($this->_mes, $this->_ingreso, $this->_impuesto);
    }

    public function calcularAcum(){
        $acumulado = 0;
        $miPersistencia = Persistencia::getInstancia();
        $lista = $miPersistencia->findInfo();
        foreach ($lista as $imp) {
            $impuesto = $imp['impuesto'];
            $acumulado = $acumulado + $impuesto;
        }
        return $acumulado;
    }
}
?>
