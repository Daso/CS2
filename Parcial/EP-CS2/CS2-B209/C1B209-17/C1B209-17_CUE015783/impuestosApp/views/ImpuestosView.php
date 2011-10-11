<?php
require_once '../models/Ingreso.php';
class ImpuestosView{
    static function ejecutar(){
        $i = new Ingreso();
        if($_GET){
            if($_GET['opcion']){
                switch($_GET['opcion']){
                    case 'main':
                        self::_mainPage();
                        break;
                    case 'agregar':                        
                        self::_agregarIngreso();
                        break;
                    case 'nuevo':
                        $ingreso = $_POST['ingreso'];
                        $mes = $_POST['mes'];
                        $ing = new Ingreso(null,$ingreso, $mes);
                        $i->agregar($ing);
                        self::_mainPage();
                        break;
                    case 'mensual':
                        $ingresos = $i->getAll();                        
                        self::_impuestoMensual($ingresos);
                        break;
                    case 'acumulado':
                        $acumulado = $i->calcularImpuestoAcumulado();
                        self::_impuestoAcumulado($acumulado);
                        break;
                    case 'extraordinario':
                        $extraordinario = $i->calcularImpuestoExtraordinario();
                        self::_impuestoExtraordinario($extraordinario);
                        break;                    
                }
            }
        }
        else{
        
        self::_mainPage();
        }
        
    }
    private static function _mainPage(){
        require_once 'mainPage.html';
    }

    private static function _agregarIngreso(){
        require_once 'agregarIngreso.html';
    }

    private static function _impuestoMensual($ingresos){
        require_once 'impuestoMensual.html';
    }

    private static function _impuestoAcumulado($acumulado){
        require_once 'impuestoAcumulado.html';
    }

    private static function _impuestoExtraordinario($extraordinario){
        require_once 'impuestoExtraordinario.html';
    }
}

ImpuestosView::ejecutar();