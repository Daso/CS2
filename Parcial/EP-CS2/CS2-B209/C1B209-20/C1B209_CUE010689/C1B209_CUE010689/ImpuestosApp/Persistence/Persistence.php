<?php

class Persistence {
    private static $_instancia = null;
    public static function getInstancia(){
        try {
            if(self::$_instancia==null){
                self::$_instancia = new Persistence();
            }

        } catch (Exception $e) {
            throw $e;
        }
        return self::$_instancia;
    }
    private $_cn;
    public function __construct(){
        try {
            $this->_cn = mysql_connect('localhost', 'root');
            if(!$this->_cn){
                $this->_cn = null;
                throw new Exception('error en la conexion');
            }
            $db = mysql_select_db('impuestosdb', $this->_cn);
            if(!$db){
                mysql_close($this->_cn);
                $this->_cn = null;
                throw new Exception('errro en la base de datos');
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function ejecutarSentencia($sql, $tipo){
        try {
            $rs = mysql_query($sql, $this->_cn);
            if(mysql_errno() != 0){
                throw new Exception(mysql_error($this->_cn));
            }
            if($tipo == 1){
                $lista = array();
                while($row = mysql_fetch_assoc($rs)){
                    $lista[] = $row;
                }
                mysql_free_result($rs);
                //echo var_dump($lista);
                return $lista;
            }

        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getAll(){
        $sql = "select * from `ingresos`";
        $lista = $this->ejecutarSentencia($sql, 1);
        return $lista;
    }

    public function insertar($mes, $saldo){
        $id = null;
        $sql = " INSERT INTO `impuestosdb`.`ingresos` (`id` ,`mes` ,`saldo` )VALUES ('$id' , '$mes', '$saldo');  ";
        $this->ejecutarSentencia($sql, 2);
    }

}

$miPersistencia = new Persistence();
$miPersistencia->getInstancia();
?>
