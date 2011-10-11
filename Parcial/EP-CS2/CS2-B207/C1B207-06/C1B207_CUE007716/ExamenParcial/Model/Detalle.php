<?php
require_once '../Persistencia/Persistencia.php';

class Detalle {
    private $_detalle;
    private $_cabecera;
    private $_ingreso;
    private $_impuesto;
    private $_instancia;

    public function __construct($detalle,$cabecera,$ingreso) {

        $this->_detalle= $detalle;
        $this->_cabecera = $cabecera;
        $this->_ingreso = $ingreso;
        //$this->_impuesto = $impuesto;
        $this->_instancia = Persistencia::getInstancia();
    }

    public function HallarImpuesto(){

        if($this->_ingreso > 2500){
            $this->_impuesto = $this->_ingreso*0.01;
        }else{
            $this->_impuesto = $this->_ingreso*0.007;
        }
    }

    public function insertar(){

        $this->_instancia->insertDetalle($this->_detalle, $this->_cabecera, $this->_ingreso, $this->_impuesto);
    }
}
?>
