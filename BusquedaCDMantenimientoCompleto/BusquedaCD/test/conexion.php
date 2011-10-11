<?php
/*conecto al servidor de base de datos */
$server = "localhost";
$username = "root";
$conexion = mysql_connect($server, $username);
/*selecciono la base de datos*/
$db=mysql_select_db('cdcol',$conexion);
/*realizo una consulta*/
$sql = "select * from cds LIMIT 0, 30 ";
$resultado = mysql_query($sql,$conexion);//devuelve un elemento tipo mysql
/*convierto el resutado mysql en un arreglo asociativo*/
while($fila = mysql_fetch_array($resultado)){
    $lista[]=$fila;
}
echo var_dump ($lista);
?>