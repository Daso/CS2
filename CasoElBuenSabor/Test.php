<?php
require_once 'models/Boleta.php';
require_once 'models/Factura.php';

$miBoleta =  new Boleta(1000, '0001');
//echo var_dump($miBoleta);
$miFactura = new Factura(5000, '0023', '4524564678');////
print_r($miFactura);
?>
