<?php
require_once '../model/Impuestos.php';
require_once '../Persistence/Persistence.php';
abstract class ImpLogic {

    public static function getAll(){
        $con = new Persistence();
        $rows = $con->consultar("Select * from imps", 1);
        foreach($rows as $imp){
            $id = $imp['id'];
            $mes= $imp['mes'];
            $ingreso = $imp['ingreso'];
            $imes= $imp['imes'];
            $iacum = $imp['iacum'];
            $iext = $imp['iext'];
            $imps[] = new Impuestos($id, $mes, $ingreso, $imes, $iacum, $iext);
        }
        return $imps;
    }

    public static function insert($mes, $ingreso){
        $con = new Persistence();
        $con->consultar("INSERT INTO `impuestos`.`imps` (`id`, `mes`, `ingreso`, `imes`, `iacum`, `iext`) VALUES (NULL, '$mes', '$ingreso', '0', '0', '0')", 2);
    }

    public static function getById($id){
        $con = new Persistence();
        $rows = $con->consultar("Select * from imps where `id`=$id", 1);
        foreach($rows as $imp){
            $id = $imp['id'];
            $mes= $imp['mes'];
            $ingreso = $imp['ingreso'];
            $imes= $imp['imes'];
            $iacum = $imp['iacum'];
            $iext = $imp['iext'];
            $imp = new Impuestos($id, $mes, $ingreso, $imes, $iacum, $iext);
        }
        return $imp;

    }

    

    public static function getByMonth($mes){
        $con = new Persistence();
        $rows = $con->consultar("Select * from imps where `mes`=$mes", 1);
        foreach($rows as $imp){
            $id = $imp['id'];
            $mes= $imp['mes'];
            $ingreso = $imp['ingreso'];
            $imes= $imp['imes'];
            $iacum = $imp['iacum'];
            $iext = $imp['iext'];
            $imp = new Impuestos($id, $mes, $ingreso, $imes, $iacum, $iext);
        }
        return $imp;

    }

    public static function calculoImpuestoMensual($id){
        $con = new Persistence();
        $impuesto = ImpLogic::getById($id);
        $ingreso = $impuesto->get_ingreso();
        $imensual = 0.7;
        if ($ingreso > 2500){
            $imensual = 0.007*$ingreso;
        }
       $con->consultar("UPDATE `impuestos`.`imps` SET `imes` = '$imensual' WHERE `imps`.`id` = $id LIMIT 1;", 2);
    }

    public static function calculoImpuestoAcum($id){

        $con = new Persistence();
        $acum = 0;
        $impuestos = ImpLogic::getAll();




        foreach ($impuestos as $imp){
            $acum = $acum + $imp->getImpMes();
        }
         $con->consultar("UPDATE `impuestos`.`imps` SET `iacum` = '$acum' WHERE `imps`.`id` = '$id' LIMIT 1;", 2);
    }

    public static function calculoImpuestoExt($id){
        $con = new Persistence();
        $impuesto = ImpLogic::getById($id);
        $ingreso = $impuesto->get_ingreso();
        if ($ingreso > 24000){
            $iext = 0.30*$ingreso;
        }
        $con->consultar("UPDATE `impuestos`.`imps` SET `iext` = '$iext' WHERE `imps`.`id` = $id LIMIT 1;", 2);
    }
}

?>
