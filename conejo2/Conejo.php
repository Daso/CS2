<?php
class Conejo {
    private $_nombre;

    public function __construct($nombre) {
        $this->_nombre = $nombre;
    }

    public function getNombre(){return $this->_nombre;}

    public function moverColita(){
        return 'Estoy moviendo la colita';
    }

    public function irZanahoria(){
        return 'Doy saltos hacia la zanahoria';
    }
}
?>
