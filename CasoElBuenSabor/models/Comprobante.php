<?php

abstract class Comprobante {
    protected $consumo;
    protected $servicio;
    protected $total;

    public function __construct($consumo) {
        $this->consumo = $consumo;
        $this->servicio = $this->consumo * 0.10;
        $this->calcular();
    }

    public function getConsumo(){return $this->consumo;}
    public function getServicio(){return $this->servicio;}
    public function getTotal(){return $this->total;}

     public function calcular() {
        $this->total = $this->consumo + $this->servicio;
    }
}

