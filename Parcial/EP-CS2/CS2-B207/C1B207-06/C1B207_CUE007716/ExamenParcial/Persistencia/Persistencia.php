<?php

class Persistencia {
    private static $_instancia;

   public static function getInstancia(){
       try {
            if(self::$_instancia==null){
                self::$_instancia = new Persistencia();
            }
       } catch (Exception $e) {
           throw $e;
       }

       return self::$_instancia;

   }

   private $_cn;

   public function __construct() {

      try {
            $this->_cn = mysql_connect('localhost', 'root');
            if(!$this->_cn){
                $this->_cn = null;
                throw new Exception("error al conectar con el servidor");

            }
            $db = mysql_select_db('practica',$this->_cn);
            if(!$db){
                mysql_close($this->_cn);
                $this->_cn = null;
                throw new Exception("Error al conectar con la base de datos");
            }
       } catch (Exception $e) {
           error_log($e->getMessage()."\n\n",3,"../Log/Error.log");
           throw $e;
       }

   }

   public function ejecutarConsulta(){

   }

   public function insertDetalle($detalle,$cabecera,$ingreso,$impuesto){
       $sql = "INSERT INTO `practica`.`detalle` (`detalle_id`, `cabezara_id`, `ingreso`, `impuesto`) VALUES ('$detalle', '$cabecera', '$ingreso', '$impuesto');";
   }
   public function insertCabecera($cabecera,$ingreso,$impuesto){
       $sql = "INSERT INTO `practica`.`cabezara` (`cabecera_id`, `ingresoTotal`, `impuestoTotal`) VALUES ('$cabecera', '$ingreso', '$impuesto');";
   }
}
?>
