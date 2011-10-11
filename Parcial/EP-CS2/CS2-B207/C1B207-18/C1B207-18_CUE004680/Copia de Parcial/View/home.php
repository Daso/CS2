<?php
require_once '../Logic/Logic.php';
class Home {
    public function ejecutar() {
        if($_GET==null){
            require_once 'Form.php';

        }
        else{
        $impuestos=array();
        $suma=0;
        for ($var = 1 ; $var <= 12 ; $var++) {
                $ingresos = $_GET["ingreso".$var];
                $ingresoL = new Logic();
                $imp=$ingresoL->agregarIngreso($var, $ingresos, 0);
                $impuestos[$var] = $imp;
                $suma=$suma+$imp;
                
            }

          require_once 'Form.php';
        }

    }
}
$mypage = new Home();
$mypage->ejecutar();

?>


