<?php
require_once '/../interface/IproductoEditorial.php';
class Carrito {
    private $_colProductoEditorial = null;
    private $_total = 0;

    public function __construct() {
        $this->_colProductoEditorial = unserialize($_SESSION['carrito']);
    }

    public function addProductoEditorial(IproductoEditorial $productoEditorial){
        $this->_colProductoEditorial[] = $productoEditorial;
        $_SESSION['carrito']  =serialize($this->_colProductoEditorial);
        $this->_calcularTotal();
    }

    public function deleteProductoEditorial($id){
        foreach ($this->_colProductoEditorial as $index => $productoEditorial) {
            if($productoEditorial->getId() == $id){
                unset($this->_colProductoEditorial[$index]);
            }
        }
        $_SESSION['carrito']  = serialize($this->_colProductoEditorial);
        $this->_calcularTotal();
    }

    private function _calcularTotal(){
        $total = 0;
        foreach($this->_colProductoEditorial as $producto){
            $total += $producto->getPrecio();
        }
        $this->_total = $total;
    }
    public function getTotal(){
        return $this->_total;
    }
    public function getProductoEditorial(){
        return $this->_colProductoEditorial;
    }
}

