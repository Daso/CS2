<?php

class Factory {
    
    private $_cn;
    
    public function __construct($cn) {
        $this->_cn=$cn;
    }

    public function connect(){
        $this->_cn = mysql_connect("localhost", "root");
        mysql_select_db("Usuario");
 
        $sql = "INSERT INTO `Usuario`.`usuario` (`dni`, `nombre`, `ingreso`, `impuesto`) VALUES (\'00141414\', \'Carlos Alcantara\', \'1800\', \'12.6\'), (\'00845847\', \'Gonzalo Torres\', \'2000\', \'14\');";
}

 }
?>
