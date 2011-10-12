<?php
require_once '/../Interface/ItemsInterface.php';
require_once '/../view/ItemsView.php';
//abstract class ItemsControl {
class ItemsControl {
    private $_colItems;
    public function getItems(ItemsInterface $item) {
        $listaItems = $item->listar();
        foreach ($listaItems as $item) {
            $this->_colItems[] = $item;             
        }
        return $this->_colItems;
    }

    public function buscarItem(ItemsInterface $item, $id){
        $itemEncontrado = $item->buscar($id);
        return $itemEncontrado;

    }
}
?>
