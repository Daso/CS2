<?php
require_once '../persistence/Persistence.php';
require_once '../model/ImpuestoPorMes.php';
require_once '../model/Usuario.php';
abstract class Control {
    public static function calcularImpuestoAnual($name){
        $impuestosMensual = self::getImpuestosMesByName($name);
        foreach($impuestosMensual as $u){
            $impMensual = $u->get_impuestoMensual();
            $impAnual = $impAnual + $impMensual;
        }
        return $impAnual;
    }

    public static function impuestoExtraordinario(){
        $impAnual = self::calcularImpuestoAnual($name);
        if($impAnual>24000)
            $impExtraordinario = $impAnual*0.3;
        return $impExtraordinario;
    }

    public static function insertarUsuario($name,$imp1,$imp2,$imp3,$imp4,$imp5,$imp6,$imp7,$imp8,$imp9,$imp10,$imp11,$imp12){
        $con = new Persistence();
        $user = new Usuario();
        $impuestoAnual = self::calcularImpuestoAnual($name);
        $con->ejecutarConsulta("", 2);
        for ($n = 1 ; $n < 13 ; $n++) {
            $impMes = new ImpuestoPorMes($mes, $ingresoMensual);
            $impuestoMensual = $impMes->get_impuestoMensual();
            $con->ejecutarConsulta("INSERT INTO `impuestos`.`impuestopormes` (`id`, `mes`, `ingresoMensual`, `impuestoMensual`, `usuarioName`) 
            VALUES (NULL, 'Enero', $mes.$n, $impuestoMensual,'$name');", 2);
        }
        $impExtra = self::impuestoExtraordinario();
        $con->ejecutarConsulta("INSERT INTO `impuestos`.`usuario` (`id`, `nombre`, `impuestoAnual`,`impExtraordinario`)
            VALUES (NULL, $name, $impuestoAnual, $impExtra);", 2);

    }

    public static function getUsuarioByName($name){
        $con = new Persistence();
        $sql = "SELECT * FROM `usuario` WHERE `nombre` LIKE '$name' LIMIT 0, 30 ";
        $lista = $con->ejecutarConsulta($sql, 1);
        foreach($lista as $u){
            $id = $u['id'];
            $nombre = $u['nombre'];
            $impuestoAnual = $u['impuestoAnual'];
            $user = new Usuario($id, $nombre, $impuestoAnual);
        }
        return $user;
    }

    public static function getImpuestosMesByName($name){
        $con = new Persistence();
        $sql = "SELECT * FROM `impuestopormes` WHERE `usuarioName` LIKE '$name' LIMIT 0, 30 ";
        $lista = $con->ejecutarConsulta($sql, 1);
        foreach($lista as $u){
            $id = $u['id'];
            $mes = $u['mes'];
            $ingresoMensual = $u['ingresoMensual'];
            $impuestoMensual = $u['impuestoMensual'];
            $impuestosMes[] = new ImpuestoPorMes($id, $mes, $ingresoMensual, $impuestoMensual, $name);
        }
        return $impuestosMes;
    }
}
?>
