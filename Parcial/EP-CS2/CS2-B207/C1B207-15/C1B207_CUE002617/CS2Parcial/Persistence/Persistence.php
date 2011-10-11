<?php
class Persistence {
// singleton
private static $_instancia = null;
    public static function getInstancia(){
        try{if(self::$_instancia == null){
            self::$_instancia = new Persistence();
        }}catch(Exception $e){
            throw $e;
        }
        return self::$_instancia;
    }
   //fin de singleeton

   private $_cn;

   public function __construct() {
       $this->_cn = mysql_connect('localhost','root');
       mysql_select_db('impuestos',$this->_cn);
   }

   public function ejecutarConsulta($sql,$tipo){
       $rs = mysql_query($sql);
       if($tipo == 1){
           $lista= array();
           while($row = mysql_fetch_assoc($rs)){
                $lista[] = $row;
           }
           mysql_free_result($rs);
           return $lista;
       }
   }
   public function insertar($ingreso){

       $a = Persistence::getInstancia();
       $sql = 'INSERT INTO `impuestos`.`imp` (`mes` ,`ingreso` ,`impuesto` ,`acumulado`,`id` )
        VALUES ('$mes', '$ingreso', '$impuesto','$acumulado')';
       $a->ejecutarConsulta($sql,1); }

}
?>
