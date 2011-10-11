<?php
require_once 'Ingreso.php';
class Logic {
   public function insertar($ingreso){
       $ing = new Ingreso($ingreso);
       $ing->insertar();
   }
}
?>
