<?php
/*Codigo solución de la generación de Servicios para automóviles
 *
 */
require_once 'ControAutoService.php';
session_start();

class index{

    public function run(){
        $miControl = new ControAutoService;
        $miControl->run();

    }
}
$miIndex = new index;
$miIndex->run();
