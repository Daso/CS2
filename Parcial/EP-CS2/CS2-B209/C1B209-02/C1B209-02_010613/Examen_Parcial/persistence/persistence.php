<?php
class persistence {
    private static  $_ins=null;

    public static  function  get_Instancia() {
        try {
            if(self::$_ins == null) {
                self::$_ins = new persistence();
            }return self::$_ins;
        } catch (Exception $e ) {
            echo $e->getMessage();
        }
    }

    private $_cn;
    public function __construct() {
        try {
            $this->_cn = mysql_connect('localhost','root');
            if(!$this->_cn) {
                $this->_cn = null;
                throw new Exception("Error, no se puede conectar");
            }
            $db = mysql_select_db('impuestos', $this->_cn );
            if(!$db) {
                mysql_close($this->_cn);
                $this->_cn = null;
                throw new Exception("Error, no existe DB");
            }
        } catch (Exception $e ) {
            echo $e->getMessage();
        }
    }

    public function ejecutar($sql, $tipo) {
        try {
            $rs = mysql_query($sql, $this->_cn);

            if($tipo == 1) {
                $lista = array();

                while ($row == mysql_fetch_assoc($rs)) {
                    $lista[] = $row;
                }
                return $lista;
            }
        } catch (Exception $e)  {

        echo $e->getMessage();
        }
    }

    public function getAll(){
        $sql = "Select * from sueldos";
        $lista = $this->ejecutar($sql, 1);
        return $lista;
    }

    public function insertar($id,$nombre,$apellido,$mes1,$mes2,$mes3,$mes4,$mes5,$mes6,
    $mes7,$mes8,$mes9,$mes10,$mes11,$mes12){
        $sql = "INSERT INTO `impuestos`.`sueldos` (`id` ,`nombre` ,`apellido` ,`enero` ,`feb` ,`marzo` ,
`abril` ,`mayo` ,`junio` ,`julio` ,`agosto` ,`septiembre` ,`octubre` ,`noviembre` ,`diciembre`)
VALUES (
'$id', '$nombre', '$apellido','$mes1','$mes2','$mes3','$mes4','$mes5','$mes6','$mes7','$mes8',
'$mes9','$mes10','$mes11','$mes12');";

        $this->ejecutar($sql, 2);
        }
}

persistence::get_Instancia();
?>
