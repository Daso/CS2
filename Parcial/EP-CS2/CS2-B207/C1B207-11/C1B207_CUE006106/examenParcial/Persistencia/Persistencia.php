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
            $this->_cn = mysql_connect('localhost', 'root');
            if(!$this->_cn){
                $this->_cn = null;
                throw new Exception("error en la conexion con el servidor");
            }
            $db = mysql_select_db('Impuestos', $this->_cn);
            if(!db){
                mysql_close($this->_cn);
                $this->_cn = null;
                throw new Exception("error: no se encuentra la base de datos");
            }
        } catch (Exception $e) {
            error_log($e->getMessage()."\n\n",3,"../log/Error.log");
        }
    }
    public function ejecutarConsulta($sql, $tipo){
        try {
            $rs = mysql_query($sql, $this->_cn);
            if(mysql_errno($this->_cn) != 0){
                throw new Exception(mysql_error($this->_cn));
            }            
            if($tipo == 1){
                $lista = array();
                while ($row = mysql_fetch_assoc($rs)) {
                      $lista[] = $row;
                }            
            }
            mysql_free_result($rs);
       return $lista;
           
        }
        catch (Exception $e) {
            error_log($e->getMessage()."\n\n",3,"../log/Error.log");
        }
             

    }

    public function ingresar($ingresoMensual, $impuestoMes, $acumuladoAnho, $impuestoExtraordinario){
        $sql = "INSERT INTO `Impuestos`.`usuario_impuestos` (`ID`, `IngresoMensual`, `ImpuestoMes`, `AcumuladoAnho`, `ImpuestoExtraordinario`)
                        VALUES (NULL, '$ingresoMensual', '$impuestoMes', '$acumuladoAnho', '$impuestoExtraordinario');";
        $this->ejecutarConsulta($sql, 2);
    }

    public function getAll(){
        $sql = "select * from usuario_impuestos";
        $this->ejecutarConsulta($sql, 1);
    }
}

Persistencia::getInstancia();
?>
