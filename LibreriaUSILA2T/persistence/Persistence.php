<?php
require_once '/../ds/BaseDeDatos.php';
require_once '/../dm/MySQL.php';
abstract class Persistence {
    public static function _conectarBD(){
        $cn = new BaseDeDatos(new MySQL());
        return $cn;
    }

    public static function consultar(SQL $sql){
        $db=Persistence::_conectarBD();
        $respuesta = $db->ejecutar($sql);
        return $respuesta;
    }
}