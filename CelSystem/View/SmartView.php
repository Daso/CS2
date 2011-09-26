<?php
abstract class SmartView {
    public static function run(){
        if(isset($_POST['txt_model'])){
            self::_shorSmartReport();
        }else{
            self::_showSmartForm();
        }
    }

    private static function _showSmartForm(){
        require_once 'SmartForm.html';
    }

    private static function _shorSmartReport(){
        require_once 'SmartReport.html';
    }

}
SmartView::run();
