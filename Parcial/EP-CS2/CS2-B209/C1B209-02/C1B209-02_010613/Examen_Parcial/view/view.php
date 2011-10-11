<?php
require_once '/../logic/control.php';
class view {
    public function ejecutar(){
        if(!isset($_GET['opcion'])){
            $this->_mostrarPrincipal();
        }else{
            $control = new control();
            $opcion = $_GET['opcion'];
            switch ($opcion){
                case 'Ingresar':
                    $this->_mostrarIngresar();
                    break;
                case 'ingresa':
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $mes1= $_POST['ene'];
                    $mes2= $_POST['feb'];
                    $mes3 = $_POST['mar'];
                    $mes4=  $_POST['ab'];
                    $mes5 =$_POST['may'];
                    $mes6 =$_POST['jun'];
                    $mes7 =$_POST['jul'];
                    $mes8= $_POST['agos'];
                    $mes9 = $_POST['set'];
                    $mes10= $_POST['oct'];
                    $mes11 =$_POST['nov'];
                    $mes12 = $_POST['dic'];
                    $control->ingresar(null, $nombre, $apellido, $mes1, $mes2, $mes3, $mes4,
                        $mes5, $mes6, $mes7, $mes8, $mes9, $mes10, $mes11, $mes12);
                    $lista= $control->calcularImpuestos($mes1, $mes2, $mes3, $mes4,
                        $mes5, $mes6, $mes7, $mes8, $mes9, $mes10, $mes11, $mes12);
                    $this->_mostrarResultados($lista);
                     break;
            }
        }

    }
    private function _mostrarResultados($lista)
    {
        require_once 'resultados.html';
    }
    private function _mostrarIngresar(){
        require_once 'IngresarSueldos.html';
    }

    private function _mostrarPrincipal(){
        require_once 'Principal.html';
    }
}

$mi = new view();
$mi->ejecutar();
?>
