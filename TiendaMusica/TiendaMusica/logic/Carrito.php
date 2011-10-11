<?php
require_once '/../interface/ItemsInterface.php';
class Carrito {
   
    private $_colItems=null;

    public function __construct() {
        
            $this->_colItems = unserialize($_SESSION['carrito']);
        
    }

    public function deleteItem($id){
        
        foreach ($this->_colItems as $index => $item){
            
            if($item->getId() == $id){

                unset($this->_colItems[$index]);

        }
        
        }
        
        $_SESSION['carrito'] = serialize($this->_colItems);
    }

    public function addItem(ItemsInterface $item){
        $this->_colItems[] = $item;
        $_SESSION['carrito'] = serialize($this->_colItems);
    }

    public function getItems(){
      
        return $this->_colItems;
    }
}
?>
