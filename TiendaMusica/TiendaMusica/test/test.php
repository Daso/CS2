<?php
require_once '/../model/CD.php';
$miCD = new CD();
echo var_dump($miCD->buscar(27));
?>
