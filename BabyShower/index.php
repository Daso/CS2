<?php
require_once 'Asistente.php';
<<<<<<< HEAD

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
   
=======
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
>>>>>>> 720ca69e94de3887a48013ec00a74ba66fceb8c8
