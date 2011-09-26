<?php
require_once 'Impresora.php';
require_once 'Texto.php';
require_once 'PaginaHTML.php';
require_once 'Foto.php';
require_once 'Registro.php';
require_once 'PatronNotas.php';

class Index{
    public function ejecutar(){
        $impresora = new Impresora();

        $objetoImprimible =  new Texto();
        $impresora->imprimir($objetoImprimible);

        $objetoImprimible2 = new PaginaHTML();
        $impresora->imprimir($objetoImprimible2);
        
        $objetoImprimible3= new Foto();
        $impresora->imprimir($objetoImprimible3);
        echo '<br />';
        
        $registro = new Registro('Carlos Gonzales');
        $impresora->imprimir($registro);

        $miPatron = new PatronNotas();
        $impresora->imprimir($miPatron);
    }

}
$miIndex = new Index();
$miIndex->ejecutar();