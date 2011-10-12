<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calculator
 *
 * @author alumno
 */
require_once '../connection/Persistence.php';
require_once '../model/Mes.php';
abstract class SystemLogic {

    public static function insertarIngresoMensual($mes, $ingreso) {
        if($ingreso > 2500) {
            $impuesto = 0.01;
        }else {
            $impuesto = 0.007;
        }
        Persistence::connect();
        Persistence::query("UPDATE `impuestos`.`meses` SET `impuesto` = '$impuesto',`ingreso` = '$ingreso' WHERE `meses`.`id` =$mes LIMIT 1 ;", 1);
    }

    public static function obtenerDatos() {
        Persistence::connect();
        $datos = Persistence::query('SELECT * FROM `meses`', 2);
        foreach($datos as $mes) {
            $id = $mes['id'];
            $nombre = $mes['mes'];
            $impuesto = $mes['impuesto'];
            $ingreso = $mes['ingreso'];
            $meses[] = new Mes($id, $nombre, $impuesto, $ingreso);
        }
        return $meses;
    }

    public static function sueldoAcumulado() {
        $meses = self::obtenerDatos();
        $acumulado = 0;
        foreach($meses as $mes) {
            $acumulado += $mes->getIngreso();
        }
        return $acumulado;
    }

    public static function impuestosAcumulados() {
        $meses = self::obtenerDatos();
        $acumulado = 0;
        foreach($meses as $mes) {
            $acumulado += $mes->getIngreso()*$mes->getImpuesto();
        }
        return $acumulado;
    }

    public static function impuestoExtraordinario() {
        $diferencia = self::sueldoAcumulado() - self::impuestosAcumulados() - 20000;
        if($diferencia > 0) {
            return $diferencia;
        }else {
            return 0;
        }
    }

    public static function total() {
        $total = self::impuestoExtraordinario() + self::impuestosAcumulados();
        return $total;
    }

}
?>
