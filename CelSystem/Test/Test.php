<?php
require_once '../Factory/SmartFactory.php';

$objeto = SmartFactory::getPhone(3, 'I4');
print_r($objeto);
?>
