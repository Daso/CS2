<?php
require_once '../persistence/Persistence.php';

$miPersistencia = Persistence::getInstancia();
//$miPersistencia->modificar("Holas","Yola Polastri","1666","10");
$miPersistencia->eliminar("10");
$lista = $miPersistencia->getAll();
print_r($lista);