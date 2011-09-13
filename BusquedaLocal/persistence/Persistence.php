<?php

class Persistence {
    //Singleton
    private static $_instancia = null;
    public static function getInstancia(){
        try {
            if(self::$_instancia == null){
                self::$_instancia = new Persistence();
            }
        } catch (Exception $e) {
            throw $e;
        }
        return self::$_instancia;
    }
    //Fin Singleton

    private $_cn;
    public function __construct() {
        try {
            $this->_cn = mysql_connect("localhost","root");
            if(!$this->_cn){
                $this->_cn = null;
                throw new Exception("Error en la conexión con el servidor");
            }
            $db=mysql_select_db("cdcol",$this->_cn);
            if(!$db){
                mysql_close($this->_cn);
                $this->_cn = null;
                throw new Exception("Error: Base de datos no existe");
            }
        } catch (Exception $e) {
            error_log($e->getMessage()."\n\n",3,"../log/Error.log");
            throw $e;
        }
    }

    public function getAll(){
        try {
            $sql = 'select * from cds';
            $rs = mysql_query($sql,$this->_cn);
            if(mysql_errno($this->_cn) != 0){
                throw new Exception(mysql_error($this->_cn));
            }
            $lista = array();
            while($row = mysql_fetch_assoc($rs)){
                $lista[] = $row;
            }
            mysql_free_result($rs);
            return $lista;
        } catch (Exception $e) {
            error_log($e->getMessage()."\n",3,"../log/Error.log");
            error_log("Query:$sql\n\n",3,"../log/Error.log");
            throw $e;
        }
    }
}
$miInstancia = Persistence::getInstancia();
