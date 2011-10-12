<?php
require_once '/../interface/IproductoEditorial.php';
require_once '/../persistence/Persistence.php';
abstract class ProductoEditorial implements IproductoEditorial{
    protected $id;
    protected $autor;
    protected $materia;
    protected $precio;
    protected $costo;


function __construct($id="", $autor="", $materia="", $precio="", $costo="") {
    $this->id = $id;
    $this->autor = $autor;
    $this->materia = $materia;
    $this->precio = $precio;
    $this->costo = $costo;
}
public function getId() {return $this->id;}
public function getAutor() {return $this->autor;}
public function getMateria() {return $this->materia;}
public function getPrecio() {return $this->precio;}
public function getCosto() {return $this->costo;}


protected function _traerDatos($tabla){
    $sql = new SQL();
    $sql->addTable('libros');
    $lista = Persistence::consultar($sql);
    return $lista;
}

}