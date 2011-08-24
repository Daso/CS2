<?php

class Asistente {

    private $_nombre;
    private $_fechaNacimiento; /** * * @param string $fechaNacimiento 5/8/1973 */

    public function __construct($nombre,$fechaNacimiento)
    {
        $this->_nombre = $nombre;
        $this->_fechaNacimiento = $fechaNacimiento;
    }

    public function decirEdad()
    {
       return $this->CalculaEdad();
        // return $this->_calcularEdad();
    }
private function CalculaEdad() {
    $fecha = $this->_fechaNacimiento;
    list($d,$m,$Y) = explode("/",$fecha);
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}
    private function _calcularEdad()
    {
        $diaActual = date("j");
        $mesActual= date("n");
        $añoActual = date("Y");
        $fechaActual = explode("/", $this->_fechaNacimiento);
        list($dia, $mes, $año) = $fechaActual;
        if (($mes == $mesActual) && ($dia > $diaActual))
        {
            $añoActual = $añoActual - 1;
        }
        if ($mes > $mesActual)
        {
            $añoActual = $añoActual - 1;
        }
        $edad = $añoActual - $año;
        return $edad;
    }
    public function preguntarEdad($asistente)
    {
        return $asistente->decirEdad();
    }
}

