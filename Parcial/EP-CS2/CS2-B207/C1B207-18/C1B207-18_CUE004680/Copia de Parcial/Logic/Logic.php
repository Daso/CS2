<?php
require_once '../Model/Ingreso.php';
class Logic {

   public function agregarIngreso($mes="",$ingresos="",$impuestos="") {
        $ingreso = new Ingreso();
        $imp = $this->calcularImpuesto($ingresos);
   
        $ingreso->insertarIngreso($mes, $ingresos, $imp);

        return $imp;
   }

   public function calcularImpuesto($ingresos) {
       if ($ingresos<=2500) {
           $v_impuesto = $ingresos*0.007;
       }
       else{
           $v_impuesto = $ingresos*0.01;
       }
       return $v_impuesto;
   }

}
?>
