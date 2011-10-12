<?php
require_once '../DS/Persistence.php';
class Impuesto {
    private $_id;
    private $_mes;
    private $_ingresos;

    public function __construct($id="", $mes="", $ingresos="") {
        $this->_id=$id;
        $this->_mes=$mes;
        $this->_ingresos=$ingresos;
    }
    public function get_id() {
        return $this->_id;
    }

    public function get_mes() {
        return $this->_mes;
    }

    public function get_ingresos() {
        return $this->_ingresos;
    }
    public function insertar($mes, $ingresos){
        $sql = "INSERT INTO `parcial`.`impuestos` (`id`, `mes`, `ingresos`)
        VALUES (NULL, '$mes', '$ingresos');";
        $pers=Persistence::getInstancia();
        $pers->consulta($sql);
    }
    public function mostrarMontos(){
        $sql = "select mes, ingresos from impuestos";
        $pers=Persistence::getInstancia();
        $pers->consulta($sql);
    }


}
?>
