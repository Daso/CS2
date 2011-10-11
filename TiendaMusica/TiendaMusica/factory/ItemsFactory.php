<?php
require_once '/../model/CD.php';
require_once '/../model/DVD.php';
require_once '/../interface/FactoryInterface.php';
class ItemsFactory implements FactoryInterface{
   static public function Create($itemType){
       switch($itemType){
           case 1:return new CD();
           case 2:return new DVD();
           default:
               throw new Exception("Tipo desconocido");
       }
   }
}
?>
