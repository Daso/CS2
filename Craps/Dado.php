<?php

class Dado {
    private $_cara;
    public function __construct() {
        return $this->lanzarDado();
    }
    private function lanzarDado(){        
        $this->_cara = rand(1, 6);          
    }
    public function getCara(){
        return $this->_cara;
    }
}

?>
