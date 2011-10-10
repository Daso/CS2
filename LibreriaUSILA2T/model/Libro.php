<?php
require_once 'ProductoEditorial.php';
class Libro extends ProductoEditorial{
    private $_titulo;
    public function __construct($id="", $titulo="", $autor="", $materia="", $precio="", $costo="") {
        parent::__construct($id, $autor, $materia, $precio, $costo);
        $this->_titulo = $titulo;
    }
    public function get_titulo() {
        return $this->_titulo;
    }

    public function listar(){

    }

    public function buscar($id){
        
    }

}
?>
