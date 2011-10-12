<?php
require_once '../control/ImpLogic.php';
abstract class View {
    public static function ejecutar() {
        if(isset($_GET['opcion'])) {
            switch ($_GET['opcion']) {

                case 'ingresar':
                    self::mostrarIngresoForm();
                    break;

                case 'insertar':
                    $mes = $_POST['txtmes'];
                    $ingreso = $_POST['ingreso'];
                    ImpLogic::insert($mes, $ingreso);
                    self::mostrarResultado();
                    break;

                case 'calcmes':
                    self::mostrarImpMensual();
                    break;

                case 'mensual':
                    $id = $_POST['radid'];
                    ImpLogic::calculoImpuestoMensual($id);
                    self::mostrarResultado();
                    break;

                case 'mensual':
                    $id = $_POST['radid'];
                    ImpLogic::calculoImpuestoMensual($id);
                    self::mostrarResultado();
                    break;

                case 'calcacum':
                    self::mostrarImpAcum();
                    break;

                 case 'acumu':
                    $id = $_POST['radid'];
                    ImpLogic::calculoImpuestoAcum($id);
                     self::mostrarResultado();
                    break;

                case 'calcext':
                    self::mostrarImpExt();
                    break;

                case 'ext':
                    $id = $_POST['radid'];
                    ImpLogic::calculoImpuestoExt($id);
                     self::mostrarResultado();
                    break;

                default:
                    self::mostrarMainForm();
                    break;
            }
        }else {
            self::mostrarMainForm();
        }
    }

    private static function mostrarMainForm() {
        $lista = ImpLogic::getAll();
        require_once 'mainform.html';
    }

    private static function mostrarIngresoForm() {
        require_once 'IngresoForm.html';
    }

    private static function mostrarResultado() {
        require_once 'result.html';
    }

    private static function mostrarImpMensual() {
        $lista = ImpLogic::getAll();
        require_once 'ImpuestoMensual.html';
    }

    private static function mostrarImpAcum() {
        $lista = ImpLogic::getAll();
        require_once 'ImpuestoAcum.html';
    }

    private static function mostrarImpExt() {
        $lista = ImpLogic::getAll();
        require_once 'ImpuestoExt.html';
    }
}

View::ejecutar();
?>
