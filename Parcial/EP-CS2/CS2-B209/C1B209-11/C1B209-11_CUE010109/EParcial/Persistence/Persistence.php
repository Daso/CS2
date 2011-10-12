<?php
class Persistence {

    private static $_instancia;
    private $_con;

    public static function getInstancia() {
        try {
            if(self::$_instancia==null) {
                self::$_instancia=new Persistence();
            }
            return self::$_instancia;
        }catch(Exception $e) {
            throw $e;
        }
    }

    public function __construct() {
        try {
            $this->_con=mysql_connect('localhost','root');
            if(!$this->_con) {
                $this->_con = null;
            }
            $db=mysql_select_database('impuestos',$this->_con);
            if(!$db) {
                mysql_close($this->_con);
                $this->_con=null;
            }
        }catch(Exception $e) {
            throw $e;
        }
    }

    public function insert(){
        try {
            $query="INSERT INTO impuestos(anho,mes,ingreso,impMesnual,impAcAnual)VALUES(?,?,?,?,?)";
            $rs=mysql_query($query, $this->_con);
            if(mysql_errno($this->_con)!=0) {
                throw new Exception(mysql_error($this->_con));
            }
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function getAll() {
        try {
            $query="SELECT * FROM impuestos";
            $rs=mysql_query($query, $this->_con);
            if(mysql_errno($this->_con)!=0) {
                throw new Exception(mysql_error($this->_con));
            }
            $lista = array();
            while($row=sql_fetch_assoc($rs)) {
                $lista[]=$row;
            }
            mysql_free_result($rs);
            return $lista;
        }
        catch(Exception $e){
            throw $e;
        }
    }
}
$instancia = Persistence::getInstancia();