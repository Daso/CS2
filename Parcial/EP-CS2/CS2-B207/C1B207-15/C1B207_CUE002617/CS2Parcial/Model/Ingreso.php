<?php
require_once 'Persistence.php';
class Ingreso {
    private $_ingreso;

    public function __construct($ingreso) {
        $this->_ingreso = $ingreso;
    }

    public function getIngreso(){
        return $this->_ingreso;
    }

    public function impuestoMensual($ingreso){
        if($ingreso<=2500){
        $impuesto = $ingreso * 0.07;
        return $impuesto;
        }else {
            $impuesto = $ingreso * 0.1;
            return $impuesto;
        }

    }
    
    public function impuestoAcum($sum){
        if($sum > 24000){
            $dif = $sum - 24000;
            $imp = $dif * 0.3;
            $sfinal= $sum - $imp;
            return $sfinal;
            
        }
    }



    public function insertar(){
        $i = Persistence::getInstancia();
        $i->insertar($this->_ingreso);
    }
}
?>
