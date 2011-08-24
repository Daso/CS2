<?php
require_once 'Asistente.php';
class index {

public function ejecutar(){
    $asistente1 = new Asistente ('Sonia','12/12/1963');
    $asistente2 = new Asistente ('Carla','12/10/1990');
    echo $asistente1->preguntarEdad($asistente2);
    echo '<br>';
    echo $asistente2->preguntarEdad($asistente1);
}

}

$index = new index;
$index->ejecutar();