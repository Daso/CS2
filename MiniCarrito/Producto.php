<?php
class Producto {
    private $_nombre;
    private $_precio;
    private $_cantidad;

    public function __construct($nombre="", $precio="", $cantidad="") {
        $this->_nombre = $nombre;
        $this->_precio = $precio;
        $this->_cantidad = $cantidad;
    }

    public function getNombre(){return $this->_nombre;}
    public function getPrecio() {return $this->_precio;}
    public function getCantidad(){return $this->_cantidad;}
    }