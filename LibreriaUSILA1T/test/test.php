<?php
require_once '/../ds/SQL.php';
require_once '/../dm/MySQL.php';
require_once '/../model/Libro.php';
require_once '/../persistence/Persistence.php';
require_once '/../ds/BaseDeDatos.php';




$miLibro = new Libro();

print_r($miLibro->listar());
/*
$consulta = new SQL();
$consulta->addTable('libros');
echo Persistence::consultar($consulta);
*//*
$consulta = new SQL();
$consulta->addTable('libros');

$mySql = new MySQL();
$mySql->conectar();
$resultado = $mySql->traerDatos($consulta);
$mySql->desconectar();
print_r($resultado);

*/
//$mySql->addWhere('id=1');

//echo "SQL:".$mySql;

?>
