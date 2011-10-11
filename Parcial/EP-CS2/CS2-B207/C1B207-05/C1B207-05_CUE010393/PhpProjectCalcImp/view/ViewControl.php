<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewControl
 *
 * @author alumno
 */
require_once '../logic/SystemLogic.php';

abstract class ViewControl {
    public static function ejecutar() {
        if(!isset($_GET['opcion'])) {
            self::mostrarPrincipal();
        }elseif($_GET['opcion'] == 'reporte' ) {
            self::mostrarReporte();
        }elseif($_GET['opcion'] == 'ingreso') {
            self::mostrarIngreso();
        }elseif($_GET['opcion'] == 'ingresarValores') {
            for ($i = 1 ; $i < 13 ; $i++) {
                SystemLogic::insertarIngresoMensual($i, $_POST["$i"]);
                self::mostrarPrincipal();
            }
        }else {
            self::mostrarPrincipal();
        }
    }

    private static function mostrarPrincipal() {
        require_once 'principal.html';
    }

    private static function mostrarIngreso() {
        require_once 'ingreso.html';
    }

    private static function mostrarReporte() {
        $meses = SystemLogic::obtenerDatos();
        $sueldoAcumulado = SystemLogic::sueldoAcumulado();
        $impuestosAcumulados = SystemLogic::impuestosAcumulados();
        $impuestoExtra = SystemLogic::impuestoExtraordinario();
        $total = SystemLogic::total();
        require_once 'reporte.html';
    }

}

ViewControl::ejecutar();
?>
