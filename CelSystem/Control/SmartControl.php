<?php
require_once '../factory/SmartFactory.php';
abstract class SmartControl {
    public static function getPhone($type, $model){
        $smart = SmartFactory::getPhone($type, $model);
        return $smart;
    }
}

