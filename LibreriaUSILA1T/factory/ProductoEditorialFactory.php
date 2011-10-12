<?php
require_once '/../interface/IFactory.php';
require_once '/../model/Libro.php';
require_once '/../model/Publicacion.php';
class ProductoEditorialFactory implements IFactory{
    public static function create($itemType){
        switch($itemType){
            case 1: return new Libro();
            case 2: return new Publicacion();
            default:
               throw new Exception("Tipo Desconocido");
        }
    }
}

