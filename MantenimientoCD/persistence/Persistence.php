<?php
class Persistence {
    //Singleton
    private static $_instancia = null;
    public static function getInstancia(){
        try {
            if(self::$_instancia == null){
                self::$_instancia = new Persistence();
            }
        } catch (Exception $e) {
            throw $e;
        }
        return self::$_instancia;
        }
    //fin singleton
   private $_cn;
   public function __construct() {
       try {
           $this->_cn=mysql_connect("localhost", "root");
           if(!$this->_cn){
               $this->_cn = null;
               throw new Exception("Error en la conexión del servidor");
           }
           $db = mysql_select_db("cdcol",$this->_cn);
           if(!$db){
               mysql_close($this->_cn);
               $this->_cn = null;
               throw new Exception("Base de datos no existe");
           }

       } catch (Exception $e) {
           error_log($e->getMessage()."\n\n",3,"../log/Error.log");
           throw $e;
       }
    }

    public function ejecutarConsulta($sql,$tipo){
        try {
            
            $rs = mysql_query($sql, $this->_cn);
            if(mysql_errno ($this->_cn) != 0){
                throw new Exception(mysql_error($this->_cn));
            }
            if($tipo==1){
                $lista = array();
                while($row = mysql_fetch_assoc($rs)){
                    $lista[] = $row;
                }
                mysql_free_result($rs);
                return $lista;
            }
        } catch (Exception $e) {
            error_log($e->getMessage()."\n",3,"../log/Error.log");
            error_log("Query:$sql\n\n",3,"../log/Error.log");
            throw $e;
        }
           }

        public function getAll(){
            $sql = 'select * from cds';
            $lista = $this->ejecutarConsulta($sql, 1);
            return $lista;
        }

        public function insertar($titulo, $interprete,$anho)
        {
            $sql = "INSERT INTO `cdcol`.`cds` (`titel`,
                `interpret`, `jahr`, `id`) VALUES
                ('$titulo', '$interprete',
                '$anho', NULL);";
            $this->ejecutarConsulta($sql, 2);
        }

        public function eliminar($id)
        {
           $sql= "DELETE FROM `cdcol`.`cds` WHERE
            `cds`.`id` = $id";
           $this->ejecutarConsulta($sql, 2);
        }

        public function modificar($titulo, $interprete, $anho, $id)
        {
            $sql = "UPDATE `cdcol`.`cds` SET `titel` 
            = '$titulo', `interpret` = '$interprete',
            `jahr` = '$anho' WHERE `cds`.`id` = $id;";

            $this->ejecutarConsulta($sql, 2);
        }


}
$miInstancia = Persistence::getInstancia();


