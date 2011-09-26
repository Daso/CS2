<?php
require_once 'Smart.php';
class IPhone extends Smart{
    public function has3G(){
        return true;
    }
    public function hasCamera(){
        return true;
    }
}

