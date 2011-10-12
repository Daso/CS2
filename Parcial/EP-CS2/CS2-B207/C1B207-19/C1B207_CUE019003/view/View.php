<?php
require_once '../control/Control.php';
abstract class View {
    public static function ejecutar(){
        if(!isset($_GET['opcion'])){
            self::_mostrarMainForm();
        }else{
            self::_mostrarResultForm();
        }
    }

    private static function _mostrarMainForm(){

        require_once 'MainForm.html';
    }
    private static function _mostrarResultForm(){
        $imp1 = $_POST['txt_ingreso1'];
        $imp2 = $_POST['txt_ingreso2'];
        $imp3 = $_POST['txt_ingreso3'];
        $imp4 = $_POST['txt_ingreso4'];
        $imp5 = $_POST['txt_ingreso5'];
        $imp6 = $_POST['txt_ingreso6'];
        $imp7 = $_POST['txt_ingreso7'];
        $imp8 = $_POST['txt_ingreso8'];
        $imp9 = $_POST['txt_ingreso9'];
        $imp10 = $_POST['txt_ingreso10'];
        $imp11 = $_POST['txt_ingreso11'];
        $imp12 = $_POST['txt_ingreso12'];
        $name = $_POST['name'];
        Control::insertarUsuario($name, $imp1,$imp2,$imp3,$imp4,$imp5,$imp6,$imp7,$imp8,$imp9,$imp10,$imp11,$imp12);
        $impAnual = Control::calcularImpuestoAnual($name);
        $mensaje="Se ha calculado satisfactoriamente los impuestos, con impuesto anual de ".$impAnual;
        require_once 'calculosResult.html';
    }
}
View::ejecutar();
?>
