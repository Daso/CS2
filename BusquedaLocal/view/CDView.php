<?php
require_once '../control/CDLogic.php';
abstract class CDView {
    public static function ejecutar(){
        $lista = null;
        $error = null;
        $titulo = null;
        $opcion = null;
        $encontrados = null;
        try {
            if(isset($_GET['opcion'])){
                $opcion = $_GET['opcion'];
            }
            if(isset($_POST['titulo'])){
                $titulo = $_POST['titulo'];
            }
            if($opcion != null){
                if($titulo != null){
                    $miLogic = new CDLogic();
                    $encontrados = $miLogic->consultaralbumPorTitulo($titulo);
                }
            self::_mostrarFormulario($encontrados);
            }else{
                $miLogic = new CDLogic();
                $lista = $miLogic->listarTodo();
                self::_mostrarLista($lista);
            }


        } catch (Exception $e) {
            $error = "Hubo un error";
        }




    }
    
    private static function _mostrarFormulario($encontrados){
        require_once 'formularioBusqueda.html';
    }

    private static function _mostrarLista($lista){
        require_once 'lista.html';
    }

}

CDView::ejecutar();

