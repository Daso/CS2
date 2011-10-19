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

        }
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
