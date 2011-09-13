<?php
require_once 'Producto.php';
session_start();
class Carrito {
    private $_colCarrito = array();
    public function __construct() {
        if($_POST['cantidad']==null){
            $this->_mostrarFormulario();
        }else{
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $this->_colCarrito = $_SESSION['carrito'];
            $miProducto = new Producto($nombre, $precio, $cantidad);
            $this->_addProducto($miProducto);
            $_SESSION['carrito'] = $this->_colCarrito;
            $this->_mostrarResumen();
        }
    }

    private function _addProducto(Producto $producto){
        $this->_colCarrito[] = $producto;
    }

    private function _mostrarFormulario(){
        require_once 'compraForm.html';
    }

    private function _mostrarResumen(){
        require_once 'resumen.html';
    }

}
?>
