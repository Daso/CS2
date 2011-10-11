<?php

class Usuario {
    private $_id;
    private $_name;
    private $_ingreso;
    private $_impMen;
    private $_impAnual;

    public function __construct($id, $name, $ingreso, $impMen, $impAnual) {
        $this->_id=$id;
        $this->_name=$name;
        $this->_ingreso=$ingreso;
        $this->_impMen=$impMen;
        $this->_impAnual=$impAnual;
    }
    public function get_id() {
        return $this->_id;
    }

    public function get_name() {
        return $this->_name;
    }

    public function get_ingreso() {
        return $this->_ingreso;
    }

    public function get_impMen() {
        return $this->_impMen;
    }

    public function get_impAnual() {
        return $this->_impAnual;
    }


}
?>
