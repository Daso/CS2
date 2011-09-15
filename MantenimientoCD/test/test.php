<?php
require_once '/../persistence/Persistence.php';
require_once '/../logic/CDLogic.php';

$logic = new CDLogic();
$cd = $logic->consultarCDPorId(4);
echo var_dump($cd);
?>
