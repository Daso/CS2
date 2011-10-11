<?php
class Persistence {
    private $_conn;
    public function __construct() {
        $this->_conn = mysql_connect("localhost","root");
        mysql_select_db("impuestos", $this->_conn);
    }

    public function ejecutarConsulta($sql,$tipo){
        switch($tipo){
            case 1:
                $rs = mysql_query($sql, $this->_conn);
                $lista = array();
                while($row = mysql_fetch_assoc($rs))
                    $lista [] = $row;
                mysql_free_result($rs);
                return $lista;
                break;
            case 2:
                $rs = mysql_query($sql, $this->_conn);
                break;
        }
    }
}
?>
