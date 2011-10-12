<?php
require_once '../Model/Cabecera.php';
require_once '../Model/Detalle.php';
abstract class Contoller {


   public static function insertDetalle($detalle,$cabecera,$ingreso){
       $detalle = new Detalle($detalle, $cabecera, $ingreso);
       $detalle->HallarImpuesto();
       $detalle->insertar();

   }

   public static function insertarCabecera($cabecera,$ingreso,$impuesto){
       $cabecera = new Cabecera($cabecera, $ingreso, $impuesto);
       $cabecera->HallarImpuestoTotal();
       var_dump($cabecera);
       $cabecera->insertar();
   }
}


?>
