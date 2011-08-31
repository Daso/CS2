<?php
/*Codigo solución de la generación de Servicios para automóviles
 *
 */
require_once 'ViewAutoservice.php';
require_once 'ControAutoService.php';
session_start();

class index{

    public function run(){
       $view = new ViewAutoservice;
      

    }
}
$miIndex = new index;
$miIndex->run();
