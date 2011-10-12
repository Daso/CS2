<?php

class salario {

    private $_enero;
    private $_febr;
    private $_marz;
    private $_abril;
    private $_may;
    private$_jn;
    private $_jl;
    private $_ag;
    private $_set;
    private $_oct;
    private $_nov;
    private $_dic;

    public function __construct($ene,$feb,$mar,$abri,$may,$jn,$jl,$ag,$set,$oct,$nov,$dic) {

        $this->_enero=$ene;
        $this->_febr=$feb;
        $this->_marz=$mar;
        $this->_abril=$abri;
        $this->_may=$may;
        $this->_jn=$jn;
        $this->_jl=$jl;
        $this->_ag=$ag;
        $this->_set=$set;
        $this->_oct=$oct;
        $this->_nov=$nov;
        $this->_dic=$dic;
        ;
    }


    public function get_enero() {
        return $this->_enero;
    }

    public function get_febr() {
        return $this->_febr;
    }

    public function get_marz() {
        return $this->_marz;
    }

    public function get_abril() {
        return $this->_abril;
    }

    public function get_may() {
        return $this->_may;
    }

    public function get_jn() {
        return $this->_jn;
    }

    public function get_jl() {
        return $this->_jl;
    }

    public function get_ag() {
        return $this->_ag;
    }

    public function get_set() {
        return $this->_set;
    }

    public function get_oct() {
        return $this->_oct;
    }

    public function get_nov() {
        return $this->_nov;
    }

    public function get_dic() {
        return $this->_dic;
    }





 
}
?>
