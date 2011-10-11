<?php

class Index {
    public function ejecutar(){
    header('location:view/ImpuestoView.php');
    }
}
$miIndex = new Index();
$miIndex->ejecutar();
?>
