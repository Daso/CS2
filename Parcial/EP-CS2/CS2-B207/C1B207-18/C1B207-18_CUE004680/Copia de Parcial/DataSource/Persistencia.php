<?php

class Persistencia {
    public static $_instance =null;
    private $_cn;

    public static function getInstance() {
        if (self::$_instance==null)
            self::$_instance=new Persistencia();
      return self::$_instance;
    }

    public function __construct() {
        $this->_cn= mysql_connect("localhost","root");
        $db=mysql_select_db("Impuestos_DB",$this->_cn);
    }

    public function ejecutarConsulta($sql) {
        $rs=mysql_query($sql,$this->_cn);
        if ($rs!=1 && $rs!=false ) {
            while ($row = mysql_fetch_assoc($rs)) {
                $lista[]=$row;
            }
        return $lista;

        }
    }


    public function insertar($mes="",$ingresos="",$impuestos="") {
        $sql = "INSERT INTO `Impuestos_DB`.`ingresos` (`Id`, `Mes`, `Ingresos`, `Impuestos`) VALUES (\'\', '$mes', '$ingresos', '$impuestos');";
        $this->ejecutarConsulta($sql);
    }




}
?>
