<?php
require_once 'ImpuestoPorMes.php';
class Usuario {
    private $_id;
    private $_nombre;
    private $_impuestoAnual;

    public function __construct($id="",$nombre="",$impuestoAnual="") {
        $this->_id = $id;
        $this->_nombre=$nombre;
        $this->_impuestoAnual=$impuestoAnual;
    }
    public function get_id() {
        return $this->_id;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function get_impuestoAnual() {
        return $this->_impuestoAnual;
    }



    

}
?>
