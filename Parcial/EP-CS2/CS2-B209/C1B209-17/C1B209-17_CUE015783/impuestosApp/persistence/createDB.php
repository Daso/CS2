<?php
require_once '../persistence/Persistence.php';
echo '<h3><a href="../Index.php">volver</a>'.' a la aplicacion</h3>';
$i = Persistence::getInstancia();
$sql = "DROP DATABASE `impuestos`";
$i->ejecutarConsulta($sql,1);
$sql = "CREATE DATABASE `impuestos` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;";
$i->ejecutarConsulta($sql,1);
$sql = "CREATE TABLE `impuestos`.`ingresos` (
`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`ingreso` FLOAT( 50 ) NOT NULL ,
`mes` VARCHAR( 20 ) NOT NULL ,
`impuesto` FLOAT( 50 ) NOT NULL
) ENGINE = MYISAM ;";
$i->ejecutarConsulta($sql,1);
$sql = "INSERT INTO `impuestos`.`ingresos` (
`id` ,
`ingreso` ,
`mes` ,
`impuesto`
)
VALUES (
NULL , '1000', 'enero', '700'
);";
$i->ejecutarConsulta($sql,1);
