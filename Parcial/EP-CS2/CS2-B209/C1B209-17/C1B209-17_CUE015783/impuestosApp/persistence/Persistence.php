<?php
#CREATE DATABASE `impuestos` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;

class Persistence{
    private static $_instancia = null;
    public static function getInstancia(){
        if(self::$_instancia == null){
            self::$_instancia = new Persistence();
        }
        return self::$_instancia;
    }

    private $_conn;

    function  __construct() {
        $this->_conn = mysql_connect('localhost','root');
        $db = mysql_select_db('impuestos',$this->_conn);
    }

    function ejecutarConsulta($sql,$tipo){
        $rs = mysql_query($sql,$this->_conn);
        if($tipo==1){
            $rows = mysql_affected_rows();
            if($rows>0)
                return True;
            else
                return False;
        }
        else{
            $array = array();
            while($row = mysql_fetch_assoc($rs)){
                $array[] = $row;
            }
            return $array;
        }
    }

    function getAll(){
        $sql = 'select * from ingresos';
        return $this->ejecutarConsulta($sql, 2);
    }

    function agregar($ingreso,$mes,$impuesto){
        $sql = "INSERT INTO `impuestos`.`ingresos` (`id`, `ingreso`, `mes`, `impuesto`) VALUES (NULL, '$ingreso', '$mes', '$impuesto');";
        return $this->ejecutarConsulta($sql, 1);
    }
}