<?php
require_once '../Control/Control.php';
abstract class View {
    public static function ejecutar(){
        if(isset($_GET['opcion'])){
            $conn=new persistencia();
            self::_mostrarMain();
            $opcion = $_GET['opcion'];
            switch ($opcion) {
                case 'main':
                    $lista= array();
                    $lista=$user->getAll();
                    self::_mostrarMain();
                    break;
                case 'ingresar':
                    self::_mostrarInsert();
                    $name=$_POST['name'];
                    $ingreso=$_POST['ingreso'];
                    $user=new Control();
                    if($ingreso>2500){
                        $impMen=$ingreso*0.01;
                    }else{
                        $impMen=$ingreso*0.007;
                    }
                    $impAnual = $impMen*12;
                    $user->ingresar($name, $ingreso, $impMen, $impAnual);
                    break;
                case 'ingresado':
                    self::_result();
                    break;
                case'calc':
                    $lista=$user->getById($_POST['radio']);
                    foreach ($lista as $r){
                        $id = $r['id'];
                        $name = $r['name'];
                        $ingreso = $r['ingreso'];
                        $impMen = $r['impMen'];
                        $impAnual = $r['impAnual'];
                        $oUser = new Usuario($id, $name, $ingreso, $impMen, $impAnual);
                    }
                    $ingreso1=($oUser->get_ingreso())*12;
                    $impAnual1=$oUser->get_impAnual();
                    $resta=$ingreso1-$impAnual1;
                    if($resta>24000){
                        $impExtra = ($resta-24000)*0.03;
                    }
                    self::_CalculoExtra($impExtra);
                    break;
                default:
                    self::_mostrarMain();
                    break;
            }
        }
    }
    private static function _mostrarMain(){
        require_once 'MainForm.html';
    }
    private static function _mostrarInsert(){
        require_once 'insert.html';
    }
    private static function _result(){
        require_once 'result.html';
    }
    private static function _CalculoExtra($impExtra){
        require_once 'calculo.html';
    }
    
}
View::ejecutar();
?>
