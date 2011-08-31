<?php
abstract class  AutoService {

  
   protected $marca;
   protected $placa;
   protected $total;
 

    public function __construct($marca,$placa) {
        
        $this->marca = $marca;
        $this->placa = $placa;
    }

    abstract public function total($afinamiento,$niveles,$lavado);
    abstract public function mostrarServicio();

}

