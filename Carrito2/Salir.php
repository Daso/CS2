<?php
class Salir {
    public function __construct() {
        session_start();
        session_destroy();
        header("location:Index.php");
    }
}
$miSalir =  new Salir();
