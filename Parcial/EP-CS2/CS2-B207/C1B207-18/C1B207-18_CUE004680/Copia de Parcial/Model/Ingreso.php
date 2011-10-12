<?php
require_once '../DataSource/Persistencia.php';
class Ingreso {
    private $_mes;
    private $_ingresos;
    private $_impuestos;


    public function __construct($mes="",$ingresos="",$impuestos="") {
        $this->_mes=$mes;
        $this->_ingresos=$ingresos;
        $this->_impuestos=$impuestos;
    }

    public function get_mes() {
        return $this->_mes;
    }

    public function get_ingresos() {
        return $this->_ingresos;
    }

    public function get_impuestos() {
        return $this->_impuestos;
    }

    public function insertarIngreso($mes="",$ingresos="",$impuestos="") {
        $instancia = Persistencia::getInstance();
        $instancia->insertar($mes,$ingresos,$impuestos);
    }




}
?>
