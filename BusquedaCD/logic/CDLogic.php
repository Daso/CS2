<?php
require_once '/../model/CD.php';
class CDLogic {

    public function listarTodo(){
        $colCD = new CD();
        $lista = $colCD->getAll();
        return $lista;
    }
    public function consultarAlbumPorTitulo($titulo){
        try {
            $lista = $this->listarTodo();
            foreach($lista as $cd){
                if($cd->getTitulo() == $titulo){
                    $respuesta[] = $cd;
                }
            }
            return $respuesta;
        } catch (Exception $exc) {
            throw $e;
        }
        }
}

