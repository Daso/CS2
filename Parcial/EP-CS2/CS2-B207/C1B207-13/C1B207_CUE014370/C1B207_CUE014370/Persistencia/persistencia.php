<?php

class persistencia {
    private $_conn;
    public function __construct() {
        $this->_conn=mysql_connect("localhost","root");
        $db=mysql_select_db("impuesto",$this->_conn);
    }

    public function concultar($sql, $tipo){
        switch ($$tipo) {
            case 1:
                $rs = mysql_query($query,$this->_conn);
                $lista = array();
                while($row = mysql_fetch_array($rs)){
                    $lista[]=$row;
                }
                mysql_free_result($rs);
                return $lista;
                break;
            case 2:
                $rs = mysql_query($query,$this->_conn);
                ;
                break;
            default:
                break;
        }
    }
}
?>
