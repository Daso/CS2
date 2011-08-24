<?php
require_once 'Conejo.php';
class Persona {
    private $_nombre;
    private $_edad;
    private $_conejo;

    public function __construct($nombre, $edad, $nombreConejo) {
        $this->_nombre = $nombre;
        $this->_edad = $edad;
        $this->_conejo = new Conejo($nombreConejo);
    }

    public function getNombre(){return $this->_nombre;}
    public function getConejo(){return $this->_conejo->getNombre();}

    public function tocarOreja(){
        return $this->_conejo->moverColita();
    }

    public function mostrarZanahoria(){
        return $this->_conejo->irZanahoria();
    }
}
?>
