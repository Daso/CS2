<?php
session_start();
require_once '/../factory/ItemsFactory.php';
require_once '/../logic/ItemsControl.php';
require_once '/../logic/Carrito.php';
class ItemsView {   
   public function __construct() {
    $opcion = $_GET['opcion'];    
    if($opcion==null){
        require_once 'inicio.html';
    }else{
  switch ($opcion){
            case 1:                              
                $lista = $this->getItems($opcion);
                require_once 'resporteCD.html';
                break;
            case 2:                
                $lista = $this->getItems($opcion);              
                require_once 'resporteDVD.html';
                break;
            case 3:
                
                $id =  $_GET['id'];
                $tipo = $_GET['tipo'];
                $miItem = ItemsFactory::Create($tipo);
                $miControl = new ItemsControl();
                $elItem = $miControl->buscarItem($miItem, $id);
                $miCarrito = new Carrito();
                $miCarrito->addItem($elItem);
                $lista = $miCarrito->getItems();
                $this->_reporteCarrito($lista);
                break;
            case 4:
                session_destroy();
                require_once 'inicio.html';
                break;
            case 5:
                $miCarrito = new Carrito();
                $lista = $miCarrito->getItems();
                $this->_confirmacionCompra($lista);
                break;
            case 6:
                $id = $_GET['id'];
                $miCarrito = new Carrito();
                $miCarrito->deleteItem($id);
                $lista = $miCarrito->getItems();
                $this->_reporteCarrito($lista);
                break;
        }
    }
   }

private function _reporteCarrito($lista){
       require_once 'carrito.html';
   }

private function _confirmacionCompra($lista){
    require_once 'confirmacion.html';
}

   private function getItems($opcion){
                $miItem = ItemsFactory::Create($opcion);
                $lista = array();                
                $listaItems = new ItemsControl();
                $lista = $listaItems->getItems($miItem);
                return $lista;
   }

}
$miView = new ItemsView();

?>
