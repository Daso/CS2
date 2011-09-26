<?php
require_once '../model/CD.php';
class CDLogic {
   public function getAll(){
       try {
        $colCD = new CD();
        $lista = $colCD->getAll();
        return $lista;
       } catch (Exception $e) {
           throw $e;
       }
   }

   public function insertar($titulo, $interprete, $anho){
       $id=null;
       $cd=new CD($id, $titulo, $interprete, $anho);
       $cd->insertar();
   }

   public function eliminar($id)
   {
       $cd = new CD();
       $cd->eliminar($id);
   }

   public function modificar($id, $titulo, $interprete, $anho){
       $cd = new CD($id, $titulo, $interprete, $anho);
       $cd->modificar();
   }

   public function consultarCDPorId($id){
       try {
        $colCD = new CD;
        $lista = $colCD->getAll();
        foreach($lista as $cd){
            if($cd->getId() == $id){
                return $cd;
            }
        }
        return false;
       } catch (Exception $e) {
           throw $e;
       }

   }

}

