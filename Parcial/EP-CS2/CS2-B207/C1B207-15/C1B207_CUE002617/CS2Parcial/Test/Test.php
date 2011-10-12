<?php
require_once '../Model/Ingreso.php';

$lala = new Ingreso();

VAR_DUMP($lala->impuestoMensual(2000));
?>

require_once '../Logic/Logic.php';