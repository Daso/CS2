<?php
class Persistence {

    private static $_instancia = null;

    public static function getInstance(){
        try {
            if(self::$_instancia == null){
                self::$_instancia = new Persistence();
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
                throw new Exception("Error en la conexcion");
            }

            $db = mysql_select_db("imp",$this->_cn);

            if(!$db){
                mysql_close($this->_cn);
                $this->_cn = null;
                throw new Exception("La base de datos no exsite");
            }

        } catch (Exception $e) {
            error_log($e->getMessage()."\n\n",3,"../log/Error.log");
            throw  $e;
        }
    }

    public function ejecutarSentencia($sql, $tipo){
        try {
            $rs = mysql_query($sql, $this->_cn);

            if(mysql_errno($this->_cn) != 0){
                throw new Exception(mysql_errno($this->_cn));
            }

            if($tipo == 1){
                $ImpArray = array();
                while($row = mysql_fetch_array($rs)){
                    $ImpArray[] = $row;
                }
                mysql_free_result($rs);
                return $ImpArray;
            }

        } catch (Exception $e) {
            error_log($e->getMessage()."\n\n",3,"../log/Error.log");
            error_log("Query:$rs\n\n",3,"..log/Error.log");
        }
    }

    public function getAll(){
        $sql = "select * from `impuestos`";
        $lista = $this->ejecutarSentencia($sql, 1);
        return $lista;
    }

    public function ingresar($mes,$ingresos,$impMes,$total){
        $sql = "INSERT INTO `imp`.`impuestos` (`id`,`mes`,`ingresos`,`impMes`,`total`) VALUES (NULL,'$mes','$ingresos','$impMes','$total');";
        $this->ingresar($mes, $ingresos, $impMes, $total);
    }
}

$miIntancia = Persistence::getInstance();