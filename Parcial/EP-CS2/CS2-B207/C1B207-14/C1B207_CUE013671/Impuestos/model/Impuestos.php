<?php

class Impuestos {
    private $_id;
    private $_mes;
    private $_ingreso;
    private $impmes;
    private $iacum;
    private $iext;

    public function __construct($id="", $mes="", $ingreso="", $impmess="", $iacum="", $iext="") {
        $this->_id =$id;
        $this->_mes=$mes;
        $this->_ingreso = $ingreso;
        $this->impmes = $impmess;
        $this->iacum = $iacum;
        $this->iext = $iext;
    }
    public function get_id() {
        return $this->_id;
    }

    public function get_mes() {
        return $this->_mes;
    }

    public function get_ingreso() {
        return $this->_ingreso;
    }

    public function getImpmes() {
        return $this->impmes;
    }

    public function getIacum() {
        return $this->iacum;
    }

    public function getIext() {
        return $this->iext;
    }


}
?>
