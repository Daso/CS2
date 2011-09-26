<?php
require_once '../Interfaces/ISmart.php';
abstract class Smart implements ISmart{
    private $_model;
    public function __construct($model) {
        $this->_model = $model;
    }
    public function getModel(){
        return $this->_model;
    }
    public function hasChip(){
        return true;
    }
    public function has3G(){
        return false;
    }
    public function hasCamera(){
        return false;
    }

}
