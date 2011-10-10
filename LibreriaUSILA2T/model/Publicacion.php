<?php
require_once 'ProductoEditorial.php';
class Publicacion extends ProductoEditorial{
    private $_numero;
    public function __construct($id="",$numero="", $autor="", $materia="", $precio="", $costo="") {
        parent::__construct($id, $autor, $materia, $precio, $costo);
        $this->_numero = $numero;
    }
    public function get_numero() {
        return $this->_numero;
    }

    public function listar(){

    }

    public function buscar($id){

    }
}
?>
