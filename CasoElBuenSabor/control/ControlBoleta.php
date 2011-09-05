<?php
require_once '../models/Boleta.php';
abstract class ControlBoleta {
    public static function ejecutar(){
        $comp=null;
        $consumo = $_POST['montoBoleta'];
        $numeroBoleta=$_POST['numeroBoleta'];
        $comp=new Boleta($consumo, $numeroBoleta);
        self::_mostrarFormulario($comp);
    }

    private static function _mostrarFormulario(Boleta $comp){
        require_once '../view/boleta.html';
    }
}
ControlBoleta::ejecutar();
