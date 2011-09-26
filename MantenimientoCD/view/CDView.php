<?php
require_once '/../logic/CDLogic.php';
class CDView {
    public function ejecutar(){
        $cdLogic = new CDLogic();
        $error = null;
        if(!isset($_GET['opcion'])){
            $lista  = $cdLogic->getAll();
            $this->_mostrarDefaultForm($lista, $error);
        }else{
            $opcion = $_GET['opcion'];
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            switch($opcion){
                case 'eliminar':
                    $cdLogic->eliminar($id);
                    $mensaje = "Eliminado";
                    $this->_mostrarActionForm($mensaje);
                    break;
                case 'ingresar':
                    $this->_mostrarIngresoForm();
                    break;
                case 'insertar':
                    $titulo = $_POST['titulo'];
                    $interprete = $_POST['interprete'];
                    $anho = $_POST['anho'];
                    $cdLogic->insertar($titulo, $interprete, $anho);
                    $mensaje = "Ingresado";
                    $this->_mostrarActionForm($mensaje);
                    break;
                case 'modificar':
                    $cd = $cdLogic->consultarCDPorId($id);
                    $this->_mostrarModificarForm($cd);
                    break;
                case 'modificacion':
                    $id = $_POST['id'];
                    $titulo = $_POST['titulo'];
                    $interprete = $_POST['interprete'];
                    $anho = $_POST['anho'];
                    $cdLogic->modificar($id, $titulo, $interprete, $anho);
                    $mensaje = "modificado";
                    $this->_mostrarActionForm($mensaje);
                    break;
               default:
                   break;

            }
        }
    }
    private function _mostrarModificarForm($cd){
        require_once 'modificarCD.html';
    }

    private function _mostrarIngresoForm()
    {
        require_once 'insertarCD.html';
    }

    private function _mostrarActionForm($mensaje)
    {
        require_once 'eliminarCD.html';
    }

    private function _mostrarDefaultForm($lista,$error){
        require_once 'Default.html';
    }

}

$miCDView = new CDView();
$miCDView->ejecutar();

?>
