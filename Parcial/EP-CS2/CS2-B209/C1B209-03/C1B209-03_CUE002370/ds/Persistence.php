<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persistence
 *
 * @author alumno
 */
class Persistence {
    private static $_instance;
    public static function getInstance(){
        if(!isset (self::$_instance)){
            self::$_instance = new Persistence();
        }
        return self::$_instance;
    }
    private static $_cn;
    public function __construct() {
        try {
            self::$_cn=mysql_connect('localhost', 'root');
            if(!self::$_cn){
                self::$_cn=null;
                throw new Exception("Error en el servidor");
            }
            $db=mysql_select_db('examenParcial', self::$_cn);
            if(!$db){
                mysql_close(self::$_cn);
                self::$_cn=null;
                throw new Exception("Error en el base de datos");
            }
        } catch (Exception $e) {
            error_log($e->getMessage()."\n\n",3,"../log/Error.log");
            throw $e;
        }
    }
    public function executeQuery($query,$tipo){
        try {
            $result=mysql_query($query, self::$_cn);
            if(mysql_errno(self::$_cn)!=0){
                throw new Exception(mysql_error(self::$_cn));
            }
            if($tipo==1){
                $list=array();
                while($row = mysql_fetch_assoc($result)){
                    $list[]= $row;
                }
                mysql_free_result($result);
                //print_r($list);
                return $list;
            }
        } catch (Exception $e) {
            error_log($e->getMessage()."\n",3,"../log/Error.log");
            error_log("Consulta: $query \n\n",3,"../log/Error.log");
            throw $e;
        }       
    }
    public function getAll(){
        $query='SELECT * FROM `impuesto`';
        $list=$this->executeQuery($query, 1);
        //print_r($list);
        return $list;
    }
    public function insert($ingreso,$mensual){
        $query="INSERT INTO `examenParcial`.`impuesto` (`id` ,`ingreso` ,
            `mensual` )VALUES (NULL , '$ingreso', '$mensual');";
        $this->executeQuery($query, 0);
    }
}
Persistence::getInstance();
?>
