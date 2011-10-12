<?php

class Persistence {
    private $_connection;

    public function __construct() {
        $this->_connection = mysql_connect("localhost", "root");
        $db = mysql_select_db("impuestos",$this->_connection);
    }

    public function consultar($sql, $tipo){
        switch ($tipo) {
            case 1:
                $rs = mysql_query($sql, $this->_connection);
                while ($row = mysql_fetch_assoc($rs)){
                    $table[] = $row;
                }
                mysql_free_result($rs);
                return $table;
                break;

            case 2:
                $rs = mysql_query($sql, $this->_connection);
                break;
        }
    }
}
?>
