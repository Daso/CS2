<?php
require_once '/../interface/ManejadorBaseDeDatosInterface.php';
class MySQL implements ManejadorBaseDeDatosInterface{
    const USUARIO = 'root';
    const CLAVE = '';
    const SERVIDOR = 'localhost';
    const BASE = 'cdcol';

    private $_conexion;

    public function conectar(){
        $this->_conexion = mysql_connect(self::SERVIDOR,self::USUARIO,self::CLAVE);
        mysql_select_db(self::BASE, $this->_conexion);
    }

    public function desconectar(){
        mysql_close($this->_conexion);
    }

    public function traerDatos(Sql $sql){
        $resultado = mysql_query($sql,$this->_conexion);
        while ($fila = mysql_fetch_array($resultado,MYSQL_ASSOC)){
            $todo[] = $fila;
        }
        return $todo;
    }
}
?>
