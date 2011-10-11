<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainView
 *
 * @author alumno
 */
require_once '/../control/LogicControl.php';
abstract class MainView {
    private static $_list;
    public static function run(){
        $opcion=null;
        $anual=null;
        if(isset ($_POST['opcion'])){
            $opcion=$_POST['opcion'];
            $log= new LogicControl();
            $list=self::$_list;
            switch ($opcion) {
                case 'Registrar':
                    $id=null;
                    $ingreso=$_POST['ingreso'];
                    $mensual=self::_calcularMensual();
                    $log->insert($id, $ingreso, $mensual);
                    self::_showInsert();
                    break;
                case 'Ver'||'Siguiente':
                    $list=$log->getAll();
                    $anual=self::_calcularAnual();
                    self::_showResult($list,$anual);
                    break;
                case 'Volver':
                    self::_showDefault();
                    break;
                default:
                    break;
            }
        }else {
            
            self::_showDefault();
        }
    }
    private static function _calcularMensual(){
        $ingreso=$_POST['ingreso'];
        if($ingreso>2500){
            $mensual=$ingreso*0.01;
        }else {
            $mensual=$ingreso*0.007;
        }
        return $mensual;
    }
    private static function _calcularAnual(){
        $log= new LogicControl();
        $list=$log->getAll();
        foreach ($list as $row) {
            $anual+=$row->getMensual();
        }
        //print_r($anual);
        return $anual;
    }
    private static function _showDefault(){
        require_once 'default.html';
    }
    private static function _showResult($list,$anual){
        require_once 'result.html';
    }
    private static function _showInsert(){
        require_once 'insert.html';
    }
}
MainView::run();
?>
