<?php
require_once '../Model/Android.php';
require_once '../Model/BlackBerry.php';
require_once '../Model/IPhone.php';
require_once '../Model/Quispe.php';
abstract class SmartFactory {
    public static function getPhone($type, $model){
        switch($type){
            case 1: return new IPhone($model);
            case 2: return new BlackBerry($model);
            case 3: return new Android($model);
            case 4: return new Quispe($model);
             
        }
    }


}

