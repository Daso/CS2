<?php
require_once '../Model/Impuesto.php';
class Logic {
    public function ejecutar($mes, $ingresos){
        $obj=new Impuesto($id, $mes, $ingresos);
        $ins=$obj->insertar($mes, $ingresos);
        return $ins;
    }
    public function calcularImpuestoMes(){
        $obj=new Impuesto();
        $ins=$obj->mostrarMontos();
        return $ins;
    }
}
?>
