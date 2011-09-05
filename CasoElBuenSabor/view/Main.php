<?php

abstract class Main {
    public static function ejecutar(){
        $comprobante = 0;
        if(isset($_POST['comprobante'])){
            $comprobante = $_POST['comprobante'];
        }
        self::_mostrarFormulario($comprobante);

    }
    private static function _mostrarFormulario($comprobante){
        require_once 'mainForm.html';
    }
}
Main::ejecutar();
