<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Meses
 *
 * @author alumno
 */
class Mes {
    private $_id;
    private $_mes;
    private $_impuesto;
    private $_ingreso;

    function __construct($_id, $_mes, $_impuesto, $_ingreso) {
        $this->_id = $_id;
        $this->_mes = $_mes;
        $this->_impuesto = $_impuesto;
        $this->_ingreso = $_ingreso;
    }

    public function getId() {
        return $this->_id;
    }

    public function getMes() {
        return $this->_mes;
    }

    public function getImpuesto() {
        return $this->_impuesto;
    }

    public function getIngreso() {
        return $this->_ingreso;
    }



}
?>
