<?php
class Persistencia {
    private static $_instancia;
    public static function getInstancia(){
        try {
            if(self::$_instancia == null){
                self::$_instancia = new Persistencia();
            }
        } catch (Exception $e) {
            throw $e;
        }
        return self::$_instancia;
    }

    private $_cn;
    public function __construct() {
        try {
            $this->_cn = mysql_connect("localhost", "root");
            if(!$this->_cn){
                $this->_cn = null;
                throw new Exception("Error al conectarse");
            }

            $db = mysql_select_db("impuestosanual", $this->_cn);
            if(!$db){
                mysql_close($this->_cn);
                $this->_cn = null;
                throw new Exception("La DB no existe");
            }
        } catch (Exception $e) {
            error_log($e->getMessage()."\n\n", 3, "../log/Error.log");
            throw $e;
        }
    }

    private function _executeSentence($sql, $tipo){
        try {
            $rs = mysql_query($sql,$this->_cn);
            if(mysql_errno($this->_cn) != 0){
                throw new Exception(mysql_error($this->_cn));
            }

            if($tipo == 1){
                $lista = array();
                while($row = mysql_fetch_assoc($rs)){
                    $lista[] = $row;
                }
                return $lista;
            }
        } catch (Exception $e) {
            error_log($e->getMessage()."\n\n", 3, "../log/Error.log");
            error_log("Query:$sql\n", 3, "../log/Error.log");
        }
    }
    public function findInfo() {
        $sql = "SELECT * FROM `impuesto` LIMIT 0, 30 ";
        $lista = $this->_executeSentence($sql, 1);
        return $lista;
    }

    public function addImpuesto($mes, $ingreso, $impuesto) {
        $sql = "INSERT INTO `impuestosanual`.`impuesto` (`id`, `mes`, `ingreso`, `impuesto`) VALUES (NULL, '$mes', '$ingreso', '$impuesto');";
        $this->_executeSentence($sql, 2);
    }

    public function editImpuesto($id, $ingreso, $impuesto) {
        $sql = "UPDATE `impuestosanual`.`impuesto` SET `ingreso` = '$ingreso', `impuesto` = '$impuesto' WHERE `impuestos`.`id` = $id LIMIT 1;";
        $this->_executeSentence($sql, 2);
    }
}
Persistencia::getInstancia();
?>
