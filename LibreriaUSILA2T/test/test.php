<?php
require_once '/../ds/SQL.php';
require_once '/../dm/MySQL.php';
$consulta = new SQL();
$consulta->addTable('libros');
//$consulta->addWhere('id = 1');
//echo ($consulta->__toString());
$mySql=new MySQL();
$mySql->conectar();
$datos = $mySql->traerDatos($consulta);
$mySql->desconectar();

print_r($datos);
?>
