<?php
class CDPersistence {
//Singleton
    private static $instancia = null;
    public static function getInstancia() {
        try {
            if(self::$instancia==null) {
                self::$instancia = new CDPersistence();
            }

        } catch (Exception $e) {
            throw $e;
        }

        return self::$instancia;

    }
//Fin Singleton

private $cn=null;
public function __construct() {
    try {
        $this->cn = mysql_connect('localhost','root');
        if(!$this->cn){
            $this->cn = null;
            throw new Exception("Error en la conexión con el servidor");
        }

        $db = mysql_select_db('cdcol',$this->cn);
        if(!$db){
            mysql_close($this->cn);
            $this->cn=null;
            throw new Exception("Base de datos no existe");
        }

    } catch (Exception $e) {
        error_log($e->getMessage()."\n\n",3,'../log/Error.log');
        throw $e;
    }

}

public function eliminar($id){
    $consulta = "DELETE FROM `cdcol`.`cds` WHERE `cds`.`id` = $id LIMIT 1";
    $this->ejecutarConsulta($consulta, 0);
}

public function insertar($titulo, $interprete, $anho){
    $consulta = "INSERT INTO `cdcol`.`cds` (`titel`, `interpret`, `jahr`, `id`) VALUES ('$titulo', '$interprete', '$anho', NULL);";
    $this->ejecutarConsulta($consulta, 0);
}

public function modificar($titulo, $interprete, $anho, $id){
    $consulta = "UPDATE `cdcol`.`cds` SET `titel` = '$titulo', `interpret` = '$interprete', `jahr` = '$anho' WHERE `cds`.`id` = '$id' LIMIT 1;";
    $this->ejecutarConsulta($consulta, 0);
}


public function getAll(){
    $consulta = 'select * from cds';
    $lista = $this->ejecutarConsulta($consulta,1);
    return $lista;
}

public function ejecutarConsulta($consulta,$tipo)
{
    try {
        
        $rs = mysql_query($consulta,$this->cn);
        if(mysql_errno($this->cn) != 0 ){
            throw new Exception(mysql_error($this->cn));
        }
        if($tipo == 1){
            $lista = array();

            while($fila = mysql_fetch_assoc($rs)){
                $lista[]=$fila;
            }
            mysql_free_result($rs);
            return $lista;
        }


    } catch (Exception $e) {
        error_log($e->getMessage()."\n",3,"../log/Error.log");
        error_log("Query:$consulta\n\n",3,"../log/Error.log");
        throw $e;
    }




}

}
