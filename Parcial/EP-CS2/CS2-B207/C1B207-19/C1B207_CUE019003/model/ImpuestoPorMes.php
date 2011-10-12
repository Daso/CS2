<?php
require_once 'Usuario.php';
class ImpuestoPorMes {
    private $_id;
    private $_mes;
    private $_ingresoMensual;
    private $_impuestoMensual;
    private $_usuarioName;

    public function __construct($id="",$mes="",$ingresoMensual="",$impuestoMensual="",$name="") {
        $this->_id = $id;
        $this->_mes=$mes;
        $this->_ingresoMensual=$ingresoMensual;
        $this->calcularImpuestoDelMes();
        $this->_usuarioName = $name;
    }
    public function get_mes() {
        return $this->_mes;
    }
    public function get_ingresoMensual() {
        return $this->_ingresoMensual;
    }
    public function get_impuestoMensual() {
        return $this->_impuestoMensual;
    }

    public function calcularImpuestoDelMes(){
        if($this->_ingresoMensual>2500)
            $this->_impuestoMensual=$this->_ingresoMensual*0.01;
        else
            $this->_impuestoMensual=$this->_ingresoMensual*0.007;
    }

}
?>
