<?php
require_once 'Persistencia/Persistencia.php';
require_once 'Model/Impuesto.php';
$persistencia = new Persistencia();
$lista = $persistencia->getAll();
echo var_dump($lista);
/*$imp = new Impuesto();
$lista = $imp->getAll();
echo var_dump($lista);*/
?>
