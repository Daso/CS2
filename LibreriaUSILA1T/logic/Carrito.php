<?php
require_once '/../interface/IproductoEditorial.php';
class Carrito {
    private $_colProductoEditorial = null;

    public function __construct() {
        $this->_colProductoEditorial = unserialize($_SESSION['carrito']);
    }

    public function addProductoEditorial(IproductoEditorial $productoEditorial){
        $this->_colProductoEditorial[] = $productoEditorial;
        $_SESSION['carrito']  =serialize($this->_colProductoEditorial);
    }

    public function deleteProductoEditorial($id){
        foreach ($this->_colProductoEditorial as $index => $productoEditorial) {
            if($productoEditorial->getId() == $id){
                unset($this->_colProductoEditorial[$index]);
            }
        }
        $_SESSION['carrito']  = serialize($this->_colProductoEditorial);
    }

    public function getProductoEditorial(){
        return $this->_colProductoEditorial;
    }



}

