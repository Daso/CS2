<?php
require_once '../Model/Impuesto.php';
class ControlImp {
    public function findInfo() {
        try {
            $imp = new Impuesto();
            $lista_imp = $imp->findInfo();
            return $lista_imp;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function addImpuesto($mes, $ingreso) {
        $imp = new Impuesto("", $mes, $ingreso);
        $imp->addImpuesto();
    }

    public function calcularAcumulado() {
        $imp = new Impuesto();
        $acumulado = $imp->calcularAcum();
        return $acumulado;
    }
    /*public function editImpuesto($id, $ingreso) {
        $imp = new Impuesto($id, "", $ingreso);
        $imp->editImpuesto();
    }*/
}
?>
