<?php
class Salir {
    public function salir(){
        session_start();
        session_destroy();
        header("location:Index.php");
    }
}
$miSalir = new Salir();
$miSalir->salir();
