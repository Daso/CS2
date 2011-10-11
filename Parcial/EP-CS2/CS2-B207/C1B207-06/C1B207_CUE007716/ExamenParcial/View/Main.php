<?php
require_once '../Control/Contoller.php';
session_start();
//session_destroy();
abstract class Main {

    public static function ejecutar(){

        if(isset ($_POST['ingreso'])){
            $ingreso = $_POST['ingreso'];
        }
        
            $mes = $_SESSION['mes'];
        
        if($mes==null){
             $mes = 1;
        }
        
        echo $mes;
        if($_POST['ingreso']==null &&  $mes <=  12){
            self::_mostrarBienvenida();
        }else{

            $cabecera = 1;
            $ingreso = $_POST['ingreso'];
             $mes = $mes+1;
            $_SESSION['mes']=$mes;
            Contoller::insertDetalle($me, $cabecera, $ingreso);
           
            self::continuar();


        }
    }

    public static function _mostrarBienvenida(){
        require_once 'FormBienvenida.html';
    }

    public static function continuar(){
        require_once 'Continuar.html';
    }
}


Main::ejecutar();

?>
