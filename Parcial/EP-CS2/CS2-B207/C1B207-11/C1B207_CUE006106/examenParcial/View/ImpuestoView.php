<?php
require_once '../Control/ImpuestoControl.php';
class ImpuestoView {

    public function ejecutar(){
        $control = new ImpuestoControl();
        if (!$_POST['ingresoMensual']){
            $this->mostrarFormularioInicial();
        }
        else{
            $ingresoMensual = $_POST['ingresoMensual'];
            $impuestoMensual = $control->calcularImpuestoMensual();
            $acumuladoMensual =$control->calcularAcumulado();
            $impExtra = 100;
            $control->insertar($ingresoMensual, $impuestoMensual, $acumuladoMensual, $impExtra);
            $this->mostrarReporte($impuestoMensual, $acumuladoAnho, $impExtra);
            if(isset ($_GET['opcion'])){
                $opcion = $_GET['opcion'];
                switch ($opcion) {
                    case 1:
                        $lista = $control->getAll();
                        $this->mostrarLista($lista);
                        break;
                    case 2:
                        $this->mostrarFormularioInicial();
                        break;
                    default:
                        break;
                }
            }
        }
    }

    private function mostrarFormularioInicial(){
        require_once 'Default.html';
    }

    private function mostrarReporte($impuestoMensual, $acumuladoAnho, $impExtra){
        require_once 'Reporte.html';
    }

    private function mostrarLista($lista){
        require_once 'ImpuestoMensual.html';
    }
    
}

$impuestoView = new ImpuestoView();
$impuestoView->ejecutar();
?>
