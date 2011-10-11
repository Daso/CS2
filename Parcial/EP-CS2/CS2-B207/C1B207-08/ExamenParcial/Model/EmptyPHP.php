<?php
require_once 'Impuesto.php';
$mes='mayo';
$ingresos=100;
$miIn = new Impuesto($id, $mes, $ingresos);
$miIn->insertar($mes, $ingresos);

?>
