<?php
    class Index{
        public function ejecutar(){
            require_once 'Inicio.html';
        }
    }
    
    $miIndex = new Index();
    $miIndex->ejecutar();
?>
