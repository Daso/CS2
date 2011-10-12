<?php
require_once '../control/CDLogic.php';
class CDView {
    public function ejecutar() {
        $cdLogic = new CDLogic();
        if($_GET['opcion']==null) {           
            $lista = $cdLogic->getAll();
            $this->mostrarDefaultForm($lista);
        }else {
            $opcion = $_GET['opcion'];
            $id = $_GET['id'];

            switch ($opcion) {
                case 'eliminar':
                    $cdLogic->eliminar($id);
                    $mensaje = "eliminado";
                    $this->mostrarFormularioAccion($mensaje);
                    break;
                case 'ingresar':
                    $this->mostrarFormularioIngreso();
                    break;
                case 'insertar':
                    $titulo = $_POST['titulo'];
                    $interprete=$_POST['interprete'];
                    $anho = $_POST['anho'];
                    //$cdLogic = new CDLogic();
                    $cdLogic->insertar($titulo, $interprete, $anho);
                    $mensaje = "insertado";
                    $this->mostrarFormularioAccion($mensaje);
                    break;
                case 'modificar':
                    $id = $_GET['id'];
                    $miCD = $cdLogic->consultarCDPorId($id);
                    $this->mostrarFormularioModicacion($miCD);
                    break;
                case 'modificacion':
                    $id= $_POST['id'];
                    $titulo = $_POST['titulo'];
                    $interprete=$_POST['interprete'];
                    $anho = $_POST['anho'];
                    $cdLogic->modificar($id, $titulo, $interprete, $anho);
                    $mensaje="modificado";
                    $this->mostrarFormularioAccion($mensaje);
                    break;



                default:
                    break;
            }

            
        }



    }

    public function mostrarFormularioModicacion($cd){
        require_once 'modificarCD.html';
    }
    public function mostrarFormularioIngreso(){
        require_once 'insertarCD.html';
    }
    public function mostrarFormularioAccion($mensaje){
        require_once 'eliminarCD.html';
    }
    public function mostrarDefaultForm($lista) {
        require_once 'Default.html';
    }
}
$miCD = new CDView();
$miCD->ejecutar();





/*  $lista = null;
        $titulo = null;

        try {
            if(isset($_POST['titulo'])){
                $titulo = $_POST['titulo'];
                $cdLogic = new CDLogic();
                $lista = $cdLogic->consultarCDPorTitulo($titulo);
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }

        $this->mostrarFormulario($lista, $error);

    }
    public function mostrarFormulario($lista, $error)
    {
        require_once 'CDForm.html';
    }/**/