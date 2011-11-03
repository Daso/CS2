<?php
session_start();
require_once '/../factory/ProductoEditorialFactory.php';
require_once '/../logic/ProductoEditorialControl.php';
require_once '/../logic/Carrito.php';
class ProductoEditorialView {
    private $_listaProductoEditorial;
    public function __construct() {
        $opcion = $_GET['opcion'];
        $productoEditorial = ProductoEditorialFactory::create(1);
        
        
        $this->_listaProductoEditorial = $productoEditorial->listar();

        if($opcion == null){
            $this->mostarInicio();
        }else{
            switch($opcion){
                case 'comprar':
                    $id = $_GET['id'];
                    $miItem = ProductoEditorialFactory::create(1);
                    $miControl = new ProductoEditorialControl();
                    $elItem=$miControl->buscarProductoEditorial($miItem, $id);
                    $miCarrito = new Carrito();
                    $miCarrito->addProductoEditorial($elItem);
                    $lista = $miCarrito->getProductoEditorial();
                    $total = $miCarrito->getTotal();
                    $this->_mostrarCarrito($lista,$total);
                    break;
                case 'eliminar':
                    $id = $_GET['id'];
                    $miCarrito = new Carrito();
                    $miCarrito->deleteProductoEditorial($id);
                    $lista = $miCarrito->getProductoEditorial();
                    $total = $miCarrito->getTotal();
                    $this->_mostrarCarrito($lista,$total);
                    break;
                case 'cerrar':
                    session_destroy();
                    header('location:../index.php');
                    break;
            }
        }
    }

    private function _mostrarCarrito($lista,$total){
        require_once 'compra.html';
    }


    public function mostarInicio(){
        static $Libro = 'Libro';
        $obj = $this->_listaProductoEditorial[0];
        $flag;



        if(is_a($obj,$Libro) ){
            $cabecera  = 'Titulo';
            $metodo = 'get_titulo';
            
        }else{
            $cabecera = 'Número';
            $metodo = "get_numero";
            
        }
        require_once 'Inicio.html';

    }

}
$miView  = new ProductoEditorialView();
