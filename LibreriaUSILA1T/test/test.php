<?php
require_once '/../ds/SQL.php';
require_once '/../dm/MySQL.php';

$consulta = new SQL();
$consulta->addTable('libros');

$mySql = new MySQL();
$mySql->conectar();
$resultado = $mySql->traerDatos($consulta);
$mySql->desconectar();
print_r($resultado);


//$mySql->addWhere('id=1');

//echo "SQL:".$mySql;

?>
