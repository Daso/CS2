<?php

class Persistence {
    private static $_instancia=null;   
    private $_cn;

    public static function Getinstancia(){

        if(self::$_instancia == null);
        self::$_instancia = new Persistence();
        return self::$_instancia;
    }

    public function Connection(){
        _cn_mysql_connect("localhost", "root");
        mysql_db_query("cu007846",$this->_cn);
    }

    public function GetAll(){
        $rs = mysql_query("cu007846",$this->_cn);
        if($rs!=0 && $rs!=false){
            
        }
        
        mysql_fetch_assoc($result);
        return $lista;
    }

}
?>
