<?php
require_once '../Persistencia/Persistencia.php';
class Impuesto {
   private $_id;
   private $_ingresoMensual;
   private $_impuestoMensual;
   private $_acumuladoMensual;
   private $_impuestoExtraOr;

   public function __construct($id="", $ingresoMensual="", $impuestoMensual="", $acumuladoMensual="", $impExtra="") {
       $this->_id = $id;
       $this->_ingresoMensual = $ingresoMensual;
       $this->_impuestoMensual = $impuestoMensual;
       $this->_acumuladoMensual = $acumuladoMensual;
       $this->_impuestoExtraOr = $impExtra;
   }

   public function getID(){return $this->_id;}
   public function getIngresoMensual(){return $this->_ingresoMensual;}
   public function getImpuestoMensual(){return $this->_impuestoMensual;}
   public function getAcumuladoMensual(){return $this->_acumuladoMensual;}
   public function getImpuestoExtraordinario(){return $this->_impuestoExtraOr;}

   public function setImpuestoMensual($impMensual){
       $this->_impuestoMensual = $impMensual;
   }

    public function setAcumuladoMensual($acumMensual){
       $this->_acumuladoMensual = $acumMensual;
   }

    public function setImpuestoExtra($impExtra){
       $this->_impuestoExtraOr = $impExtra;
   }

   public function insertar(){
       $id = null;
       $imp =Persistencia::getInstancia();
       $imp -> ingresar($this->_ingresoMensual, $this->_impuestoMensual, $this->_acumuladoMensual, $this->_impuestoExtraOr);
   }

   public function getAll(){
       $arrayImp = array();
       $lista = Persistencia::getInstancia();
       foreach ($lista as $imp) {
           $id = $imp['id'];
           $ingresoMensual = $imp['ingresoMensual'];
           $impuestoMensual = $imp['impuestoMensual'];
           $acumuladoMensual = $imp['acumuladoMensual'];
           $impExtra = $imp['impuestoExtraordinario'];
           $arrayImp[] = new Impuesto($id, $ingresoMensual, $impuestoMensual, $acumuladoMensual, $impExtra);
       }
       return $arrayImp;
   }
}
?>
