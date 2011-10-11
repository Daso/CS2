<?php
require_once '../Control/ControlImp.php';
abstract class ViewImp {
    public static function run() {
        $control = new ControlImp();
        if(!isset($_GET['opcion'])){
            $lista = $control->findInfo();
            $acumulado = $control->calcularAcumulado();
            self::mostrarFormPrincipal($lista, $acumulado);
        }else{
            $opcion = $_GET['opcion'];
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            switch ($opcion) {
                case 'ingreso':
                    self::mostrarFormIngreso();
                    break;
                case 'insertar':
                    $mes = $_POST['mes'];
                    $ingreso = $_POST['ingreso'];
                    $control->addImpuesto($mes, $ingreso);
                    $mensaje = "insertar nuevos datos";
                    self::mostrarFormMensaje($mensaje);
                    break;
                case 'salida':
                    $mensaje = "salir del sistema";
                    self::mostrarFormMensaje($mensaje);
                    break;
                case 'edita':
                    self::mostrarFormEditar();
                    break;
                /*case 'editar':
                    $ingreso = $_POST['ingreso_nuevo'];
                    $control->editImpuesto($id, $ingreso);
                    $mensaje = "editar un registro";
                    self::mostrarFormMensaje($mensaje);
                    break;*/
            }
        }
    }

    private static function mostrarFormPrincipal($lista, $acumulado){
        require_once 'Default.html';
    }

    private static function mostrarFormIngreso(){
        require_once 'ingresaForm.html';
    }

    private static function mostrarFormMensaje($mensaje) {
        require_once 'mensajeForm.html';
    }
}
ViewImp::run();
?>
