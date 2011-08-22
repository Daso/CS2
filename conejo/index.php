<?php
require_once 'Persona.php';
class Index{
public function ejecutar(){
    $carlos = new Persona("Carlos", 5, "Rabito");
    $this->conejo2HTML($carlos);
    //print_r($carlos);    Prueba 1
}

private function conejo2HTML(Persona $ninho){
    $nombreNinho = $ninho->getNombre();
    $nombreConejo = $ninho->getConejo();
    $tocaOreja = $ninho->tocarOreja();
    $muestraZanahoria = $ninho->mostrarZanahoria();
    require_once 'vistaConejo.html';

}
}

$miIndex = new Index();
$miIndex->ejecutar();
?>
   
