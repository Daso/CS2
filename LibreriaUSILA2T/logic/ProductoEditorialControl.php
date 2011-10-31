<?php
class ProductoEditorialControl {
    private $_colProductoEditorial;
    public function getProductoEditorial(IproductoEditorial $productoEditorial){
        $listaProductoEditorial  = $productoEditorial->listar();
        foreach($listaProductoEditorial as $productoEditorial){
            $this->_colProductoEditorial[] = $productoEditorial;
        }

    return $this->_colProductoEditorial;
    }

    public function buscarProductoEditorial(IproductoEditorial $productoEditorial, $id){
        $productoEditorialEncontrado = $productoEditorial->buscar($id);
        return $productoEditorialEncontrado;
    }
}
?>
