<?php
require_once 'ProductoEditorial.php';
class Publicacion extends ProductoEditorial{
    private $_numero;
    public function __construct($id="", $numero="", $autor="", $materia="", $precio="", $costo="") {
        parent::__construct($id, $autor, $materia, $precio, $costo);
        $this->_numero = $numero;
    }
    public function get_numero() {return $this->_numero;}

    public function buscar($id){
        $colPublicacion = $this->listar();
        foreach($colPublicacion as $publicacion){
            if($id == $publicacion->getId()){
                return $publicacion;
        }
    }
    }


    public function listar(){
        $lista = $this->_traerDatos('publicacion');
        foreach($lista as $publicacion){
            $id  = $publicacion['id'];
            $numero = $publicacion['numero'];
            $autor = $publicacion['autor'];
            $materia = $publicacion['materia'];
            $precio = $publicacion['precio'];
            $costo = $publicacion['costo'];
            $arreglo[] = new Publicacion($id, $numero, $autor, $materia, $precio, $costo);
        }
        return $arreglo;
    }




}
?>
