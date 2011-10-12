<?php
require_once '/../interface/ItemsInterface.php';
abstract class Disco implements ItemsInterface{
    protected $_id;
    protected $_titulo;
    protected $_anho;

    public function __construct($id="",$titulo="", $anho="") {
        $this->_id=$id;
        $this->_titulo=$titulo;
        $this->_anho=$anho;
    }

    public function getId(){
        return $this->_id;
    }
    public function getTitulo(){
        return $this->_titulo;
    }

    public function getAnho(){
        return $this->_anho;
    }
    protected function _traerDatos($tabla){
        $sql = new SQL();
        $sql->addTable($tabla);
        $lista = Persistence::consultar($sql);
        return $lista;
    }
}

