<?php
class Asistente {
    private $_nombre;
    private $_fechaNacimiento;
    public function __construct($nombre, $fechaNacimiento) {
        $this->_nombre = $nombre;
        $this->_fechaNacimiento = $fechaNacimiento;
    }
   private function _calcularEdad(){
        $fecha = $this->_fechaNacimiento;
        list($d, $m, $Y) = explode("/",$fecha);
        $diaActual = date("j");
        $mesActual = date("n");
        $anhoActual = date("Y");
        if(($m == $mesActual)&&($d > $diaActual)){
            $anhoActual = $anhoActual - 1;
        }
        if($m > $mesActual){
            $anhoActual = $anhoActual - 1;
        }
        $edad = $anhoActual - $Y;
        return $edad;
    }

    public function decirEdad(){
        return $this->_calcularEdad();
    }

    public function preguntarEdad(Asistente $asistente){
        return $asistente->decirEdad();
    }

}
?>

