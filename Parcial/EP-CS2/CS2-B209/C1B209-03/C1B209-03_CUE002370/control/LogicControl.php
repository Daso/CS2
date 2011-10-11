<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogicControl
 *
 * @author alumno
 */
require_once '/../model/Tax.php';
class LogicControl {
    public function getAll(){
        $tax = new Tax();
        $list = $tax->getAll();
        //print_r($list);
        return $list;
    }
    public function insert($id, $ingreso, $mensual){
        $id=null;
        $tax = new Tax($id, $ingreso, $mensual);
        $tax->insert();
    }
}
?>
