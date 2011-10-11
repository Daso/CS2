<?php
require_once '../Logic/Logic.php';
class Control {
    public function ejecutar(){
        if(!isset ($_POST['mes'])){
            require_once 'insertar.html';
        }else{
            $obj=new Logic();
            
            /*foreach ($ins as $v) {
                $mes=$v['mes'];
                $ingresos=$v['ingresos'];
                $imp=new Impuesto($id, 'mayo', 15);
            }*/
            $mes=$_POST['mes'];
            
            $ingresos=$_POST['ingresos'];
            
            $obj->ejecutar($mes, $ingresos);
          
        }
    }
    public function mostrar(){
        if($_GET['func']==1){
            require_once 'montos.html';;
        }
    }
}
$miControl=new Control();
$miControl->ejecutar();
$miControl->mostrar();
?>
