<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tax
 *
 * @author alumno
 */
require_once '/../ds/Persistence.php';
class Tax {
    private $_id;
    private $_ingreso;
    private $_mensual;
    public function __construct($id="",$ingreso="",$mensual="") {
        $this->_id=$id;
        $this->_ingreso=$ingreso;
        $this->_mensual=$mensual;
    }
    public function getId(){return $this->_id;}
    public function getIngreso(){return $this->_ingreso;}
    public function getMensual(){return $this->_mensual;}
    public function insert(){
        $pers=Persistence::getInstance();
        $id=null;
        $pers->insert($this->_ingreso,$this->_mensual);
    }
    public function getAll(){
        $list=array();
        $pers=Persistence::getInstance();
        $row=$pers->getAll();
        foreach ($row as $variable) {
            $id=$variable['id'];
            $ingreso=$variable['ingreso'];
            $mensual=$variable['mensual'];
            $list[]=new Tax($id, $ingreso, $mensual);
        }
        //print_r($row);
        return $list;
    }
}
?>
