<?php
require_once '../Persistence/Persistence.php';
class Impuestos {

    private $_id;
    private $_montoMes;

    public function __construct($id ="", $montoMes = "") {
                $id = _id;
                $montoMes = _montoMes;
    }

    public function get_id() {
        return $this->_id;
    }

    public function get_montoMes() {
        return $this->_montoMes;
    }
}
?>
