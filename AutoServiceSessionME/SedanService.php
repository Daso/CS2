<?php
require_once 'AutoService.php';
class SedanService extends AutoService{
   
    public function __construct($marca,$placa) {        
        parent::__construct($marca,$placa); 
    }

    public function total($afinamiento,$niveles,$lavado)
    {

        $servicios = $afinamiento + $niveles + $lavado;
        $this->total=($servicios * 1.5 + 15);
    }

    public function mostrarServicio()
    {
        $salida = ' ';
        $salida .= $this->codigo." ";
        $salida .= $this->marca." ";
        $salida .= $this->placa." ";
        $salida .= $this->total;
        return $salida;
    }
}

