<?php
require_once '/../ds/SQL.php';
require_once '/../dm/MySQL.php';
//require_once '/../model/Libro.php';
//require_once '/../model/Publicacion.php';
require_once '/../persistence/Persistence.php';
require_once '/../ds/BaseDeDatos.php';
require_once '/../factory/ProductoEditorialFactory.php';


$miObjetoFactory = new ProductoEditorialFactory();
$obj = $miObjetoFactory->create(1);
print_r($obj);



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
