<?php
require_once 'Disco.php';
class DVD extends Disco{
    private $_duracion;
    public function __construct($id="",$titulo="", $anho="", $duracion="") {
        parent::__construct($id, $titulo, $anho);
        $this->_duracion = $duracion;
    }
    public function getDuracion(){
        return $this->_duracion;
    }

        public function buscar($id){
        $colDVD=$this->listar();
        foreach($colDVD as $dvd){
            if($id == $dvd->getId()){
                return $dvd;
            }
        }
    }
    public function listar(){
        $lista = $this->_traerDatos('dvdcol');
        foreach($lista as $dvd){
            $id = $dvd['id'];
            $titulo = $dvd['titulo'];
            $anho = $dvd['anho'];
            $duracion = $dvd['duracion'];
            $arreglo[] = new DVD($id, $titulo, $anho, $duracion);
        }
        return $arreglo;
    }
}
?>

