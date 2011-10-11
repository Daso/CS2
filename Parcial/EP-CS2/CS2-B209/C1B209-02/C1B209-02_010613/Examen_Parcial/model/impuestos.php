<?php
require_once '/../persistence/persistence.php';
class impuestos {
     private $_id;
     private $_nombre;
     private $_apellido;
     private $_ene;
     private $_feb;
     private $_mar;
     private $_abr;
     private $_may;
     private $_jun;
     private $_jul;
     private $_agosto;
     private $_set;
     private $_oct;
     private $_nov;
     private $_dic;


     public function __construct($id="",$nombre="",$apellido="",$mes1="",$mes2="",$mes3="",
     $mes4="",$mes5="",$mes6="",$mes7="",$mes8="",$mes9="",$mes10="",$mes11="",$mes12="") {
         $this->_id = $id;
         $this->_nombre = $nombre;
         $this->_apellido = $apellido;
         $this->_ene = $mes1;
         $this->_feb = $mes2;
         $this->_mar = $mes3;
         $this->_abr = $mes4;
         $this->_may = $mes5;
         $this->_jun = $mes6;
         $this->_jul = $mes7;
         $this->_agosto = $mes8;
         $this->_set = $mes9;
         $this->_oct = $mes10;
         $this->_nov = $mes11;
         $this->_dic = $mes12;

     }

     public function get_id() {
         return $this->_id;
     }

     public function get_nombre() {
         return $this->_nombre;
     }

     public function get_apellido() {
         return $this->_apellido;
     }

     public function get_ene() {
         return $this->_ene;
     }

     public function get_feb() {
         return $this->_feb;
     }

     public function get_mar() {
         return $this->_mar;
     }

     public function get_abr() {
         return $this->_abr;
     }

     public function get_may() {
         return $this->_may;
     }

     public function get_jun() {
         return $this->_jun;
     }

     public function get_jul() {
         return $this->_jul;
     }

     public function get_agosto() {
         return $this->_agosto;
     }

     public function get_set() {
         return $this->_set;
     }

     public function get_oct() {
         return $this->_oct;
     }

     public function get_nov() {
         return $this->_nov;
     }

     public function get_dic() {
         return $this->_dic;
     }

     public function getAll(){
         $mi = persistence::get_Instancia();
         $lista = $mi->getAll();
         return $lista;
     }
     //$id,$nombre,$apellido,$mes1,$mes2,$mes3,
     //$mes4,$mes5,$mes6,$mes7,$mes8,$mes9,$mes10,$mes11,$mes12
     public function insertarMes(){

     $mi = persistence::get_Instancia();
     $mi->insertar($this->_id,$this->_nombre,$this->_apellido,$this->_ene,
     $this->_feb,$this->_mar,$this->_abr,$this->_may,$this->_jun,$this->_jul,
     $this->_agosto,$this->_set,$this->_oct,$this->_nov,$this->_dic);

     }


}
?>
