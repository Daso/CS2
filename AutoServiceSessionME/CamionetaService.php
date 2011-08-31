<?php
require_once 'AutoService.php';
class CamionetaService extends AutoService {
    
    private $_modelo;
    public function __construct($marca,$placa,$modelo)
    {

        parent::__construct($marca,$placa);
        $this->_modelo = $modelo;


    }
    public function total($afinamiento,$niveles,$lavado)
    {
        $servicios = $afinamiento + $niveles + $lavado;
        $this->total=($servicios * 1.8 * 1.2 + 10);
    }

     public function mostrarServicio()
    {
        $salida = ' ';
        $salida .= $this->codigo." ";
        $salida .= $this->marca." ";
        $salida .= $this->placa." ";
        $salida .= $this->_modelo." ";
        $salida .= $this->total;
        return $salida;
    }
}

