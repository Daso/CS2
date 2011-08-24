<?php
require_once 'Asistente.php';

class Index{
    public function ejecutar(){
        $sonia = new Asistente('Sonia', '12/12/1963');
        $carla = new Asistente('Carla', '12/10/1990');
        echo $sonia->preguntarEdad($carla);
        echo "<br />";
        echo $carla->preguntarEdad($sonia);
    }
}

$index = new Index();
$index->ejecutar();

?>

