<?php
// $carlos = new Persona('Carlos', 5, 'Rabito'); PRUEBA1
   //echo var_dump($carlos);
   // print_r($carlos);

    require_once 'Persona.php';
    class Index{
        public function ejecutar(){
            $carlos = new Persona('Carlos', 5, 'Rabito');
            $this->conejo2HTML($carlos);
        }
        
        public function conejo2HTML(Persona $ninho){
            $nombrePesona = $ninho->getNombre();
            $nombreConejo = $ninho->getConejo();
            $tocaOreja = $ninho->tocarOreja();
            $muestraZanahoria = $ninho->mostrarZanahoria();
            require_once 'vistaConejo.html';
        }
        
    }

   $miIndex = new Index();
   $miIndex->ejecutar();

?>
   