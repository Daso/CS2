<?php
require_once 'ProductoEditorial.php';
class Libro extends ProductoEditorial{
    private $_titulo;
    public function __construct($id="", $titulo="",$autor="", $materia="", $precio="", $costo="") {
        parent::__construct($id, $autor, $materia, $precio, $costo);
        $this->_titulo = $titulo;
    }
    public function get_titulo() {return $this->_titulo;}

    public function buscar($id){
        $colLibro = $this->listar();
        foreach($colLibro as $libro){
            if($id == $libro->getId()){
                return $libro;
        }
    }
    }


    public function listar(){
        $lista = $this->_traerDatos('libros');        
        foreach($lista as $libro){
            $id  = $libro['id'];
            $titulo = $libro['titulo'];
            $autor = $libro['autor'];
            $materia = $libro['materia'];
            $precio = $libro['precio'];
            $costo = $libro['costo'];
            $arreglo[] = new Libro($id, $titulo, $autor, $materia, $precio, $costo);
        }
        return $arreglo;
    }
}

