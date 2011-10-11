<?php

class Usuario {
    private $_nombre;
    private $_ingreso;
    

    public function __construct($nombre,$ingreso) {
        $this->_ingreso=$ingreso;
        $this->_nombre=$nombre;
      
    }

    public function getIngreso ($ingreso){$this->_ingreso+$ingreso;}

    public function calcularImpuestoMensual($ingreso){
        if($ingreso<2500){
            $impuestoMensual = $this->getIngreso($ingreso)*0.7/100;

        }
        else {
            $impuestoMensual=$ingreso*1/100;
        }
        return $impuestoMensual;
    }

    public function calcularAcumuladoAnual(){
        $acumulado =$this->calcularImpuestoMensual($ingreso);
        return $acumulado;
    }

    public function calcularImpuestoExtraordinario(){
        if($this->getIngreso($ingreso)>24000){
            $impuestoExtraonario = $this->getIngreso($ingreso)*0.3;
        }
    }
    public function impuestoTotal(){
        $impuestoTotal= $this->calcularAcumuladoAnual()+$this->calcularImpuestoExtraordinario();
    }
}
?>
