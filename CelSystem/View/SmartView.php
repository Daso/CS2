<?php
require_once '../Control/SmartControl.php';
abstract class SmartView {
    public static function run(){
        if(isset($_POST['txt_model'])){
            $model = $_POST['txt_model'];
            $type = $_POST['r_smart'];
            $phone = SmartControl::getPhone($type, $model);            
            self::_showSmartReport($phone);
        }else{
            self::_showSmartForm();
        }
    }

    private static function _showSmartForm(){
        require_once 'SmartForm.html';
    }

    private static function _showSmartReport($phone){

        require_once 'SmartReport.html';
    }

    private static function _booleanToString($valor){
        if($valor){
            return "si";
        }else{
            return "no";
        }

    }

}
SmartView::run();
