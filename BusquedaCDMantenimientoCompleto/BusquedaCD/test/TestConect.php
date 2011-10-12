<?php
require_once '../ds/CDPersistence.php';
require_once '../model/CD.php';
require_once '../control/CDLogic.php';
/*Test Persitencia
$miInstancia = CDPersistence::getInstancia();
$resultado = $miInstancia->getAll();
echo var_dump ($resultado);
 *
 */

/*Test CD
$miCD = new CD();
$lista = $miCD->getAll();
echo var_dump($lista);
*/
/*
$miLogic = new CDLogic();
$resultado = $miLogic->consultarCDPorTitulo('Glee');
echo var_dump($resultado);
*/

/*$miCd = new CD();
$miCd->insertar("rrHola","rrPruebaInserto","2120");
*/

/*$miCdLogic = new CDLogic();
$miCdLogic->insertar('AAAA', 'BBBB', 9999);*/

/*$miInstancia = CDPersistence::getInstancia();
$miInstancia->insertar('AAAA', 'BBBB', 9999);*/

$miLogic = new CDLogic();
$miObjeto = $miLogic->consultarCDPorId(145);
echo var_dump($miObjeto);
?>
