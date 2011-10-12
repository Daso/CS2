<?php
/*require_once '../Persistencia/Persistencia.php';

$miInstancia = Persistencia::getInstancia();

$list = $miInstancia->findInfo();
print_r($list);*/

require_once '../Control/ControlImp.php';

$impControl = new ControlImp();
$impControl->addImpuesto('Febrero', 2000);
$lista = $impControl->findInfo();

print_r($lista);
?>
