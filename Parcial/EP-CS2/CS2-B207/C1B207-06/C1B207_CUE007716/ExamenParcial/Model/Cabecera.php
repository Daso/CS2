<?php
require_once '../Persistencia/Persistencia.php';
class Cabecera {
    private $_cabecera;
    private $_ingresoTotal;
    private $_impuestoTotal;
    private $_instancia;
    
    public function __construct($cabecera, $ingreso, $impuesto) {
        $this->_cabecera = $cabecera;
        $this->_ingresoTotal = $ingreso;
        $this->_ingresoTotal = $impuesto;
        $this->_instancia = Persistencia::getInstancia();
    }
    
    public function HallarImpuestoTotal(){
        $valor = $this->_ingresoTotal - $this->_impuestoTotal;
        if($valor > 24000){
            $difere = $valor - 24000;
            $impuesto = $difere*0.3;
            $this->_ingresoTotal = $this->_ingresoTotal + $impuesto;
            
        }
    }

    public function insertar(){
         $this->_instancia->insertCabecera($this->_cabecera, $this->_ingresoTotal, $this->_impuestoTotal);
    }

    public function get_cabecera() {
        return $this->_cabecera;
    }

    public function get_ingresoTotal() {
        return $this->_ingresoTotal;
    }

    public function get_impuestoTotal() {
        return $this->_impuestoTotal;
    }



}
?>
