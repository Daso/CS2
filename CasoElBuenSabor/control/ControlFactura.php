<?php
require_once '../models/Factura.php';
abstract class ControlFactura {
    public static function ejecutar(){
        $comp=null;
        $consumo = $_POST['montoFactura'];
        $numeroFactura=$_POST['numeroFactura'];
        $ruc = $_POST['ruc'];
        $comp=new Factura($consumo, $numeroFactura, $ruc);
        self::_mostrarFormulario($comp);
    }

    private static function _mostrarFormulario(Factura $comp){
        require_once '../view/factura.html';
    }
}
ControlFactura::ejecutar();
