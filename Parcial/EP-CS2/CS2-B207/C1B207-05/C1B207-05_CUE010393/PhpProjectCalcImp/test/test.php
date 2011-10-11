<?php
/*
require_once '../connection/Persistence.php';
Persistence::connect();
$table = Persistence::query('SELECT * FROM `cds` LIMIT 0 , 30', 2);
print_r($table);
 * 
 */

/*
require_once '../connection/Persistence.php';
Persistence::connect();
$table = Persistence::query("INSERT INTO `cdcol`.`cds` (
`titel` ,
`interpret` ,
`jahr` ,
`id`
)
VALUES (
'123', '123', '123', NULL
);", 1);
print_r($table);
 *
 */

/*
require_once '../connection/Persistence.php';
Persistence::connect();
$table = Persistence::query('SELECT * FROM `meses` LIMIT 0 , 30', 2);
print_r($table);
*/

require_once '../logic/SystemLogic.php';
$meses = SystemLogic::obtenerDatos();
print_r($meses);
?>


