<?php
require_once 'Disco.php';
require_once '/../ds/SQL.php';
require_once '/../persistence/Persistence.php';
class CD extends Disco{
    private $_interprete;

    public function __construct($id="", $titulo="", $anho="", $interprete="") {
        $this->_interprete = $interprete;
        parent::__construct($id, $titulo, $anho);
    }

    public function getInterprete(){
        return $this->_interprete;
    }

    public function buscar($id){
        $colCd=$this->listar();
        foreach($colCd as $cd){
            if($id == $cd->getId()){
                return $cd;
            }
        }
    }
    public function listar(){
        $lista = $this->_traerDatos('cds');
        foreach($lista as $cd){
            $id = $cd['id'];
            $titulo = $cd['titel'];
            $anho = $cd['jahr'];
            $interprete = $cd['interpret'];
            $arreglo[] = new CD($id, $titulo, $anho, $interprete);
        }        
        return $arreglo;      
    }
}
?>
