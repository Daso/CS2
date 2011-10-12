<?php
require_once '../ds/CDPersistence.php';
class CD {
    private $_id;
    private $_titulo;
    private $_interprete;
    private $_anho;

    public function __construct($id="",$titulo="",$interprete="",$anho="")
    {
        $this->_id = $id;
        $this->_titulo = $titulo;
        $this->_interprete = $interprete;
        $this->_anho = $anho;
    }
    public function getId(){return $this->_id;}
    public function getTitulo(){return $this->_titulo;}
    public function getInterprete(){return $this->_interprete;}
    public function getAnho(){return $this->_anho;}

    public function eliminar($id){
        $cd = CDPersistence::getInstancia();
        $cd->eliminar($id);
    }

    public function insertar(){
        $cd = CDPersistence::getInstancia();
        $cd->insertar(
            $this->_titulo,
            $this->_interprete,
            $this->_anho);

    }

    public function modificar(){
        $cd=CDPersistence::getInstancia();
        $cd->modificar($this->_titulo,
            $this->_interprete,
            $this->_anho,
            $this->_id);
    }


    public function getAll()
    {
        $CDArray = Array();
        $listaCD = CDPersistence::getInstancia();
        $arreglo = $listaCD->getAll();

        foreach($arreglo as $objeto)
        {
            $id = $objeto['id'];
            $titulo = $objeto['titel'];
            $interprete = $objeto['interpret'];
            $anho = $objeto['jahr'];
            $CDArray[] = new CD($id, $titulo, $interprete, $anho);

        }
        return $CDArray;

    }


}
?>
