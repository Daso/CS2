<?php
require_once '../Persistencia/persistencia.php';
require_once '../Model/Usuario.php';
abstract class Control {
    public static function getAll(){
        $con = new persistencia();
        $sql = "SELECT * FROM `usuario` LIMIT 0, 30 ";
        $rows = $con->concultar($sql, 1);
        foreach($rows as $r){
            $id = $r['id'];
            $name = $r['name'];
            $ingreso = $r['ingreso'];
            $impMen = $r['impMen'];
            $impAnual = $r['impAnual'];
            $lista = new Usuario($id, $name, $ingreso, $impMen, $impAnual);
        }
        return $lista;
    }
    public static function ingresar($name, $ingreso, $impMen, $impAnual){
        $con = new persistencia();
        $sql = "INSERT INTO `impuesto`.`usuario` (`id`, `name`, `ingreso`, `impMen`, `impAnual`)
                VALUES (NULL, '$name', '$ingreso', '$impMen', '$impAnual');";
        $user = $con->concultar($sql, 2);
        return $user;
    }
    public static function getById($id){
        $con = new persistencia();
        $sql = "SELECT * FROM `usuario` WHERE `id` = $id LIMIT 0, 30 ";
        $rows = $con->concultar($sql, 1);
        foreach($rows as $r){
            $id = $r['id'];
            $name = $r['name'];
            $ingreso = $r['ingreso'];
            $impMen = $r['impMen'];
            $impAnual = $r['impAnual'];
            $oUser = new Usuario($id, $name, $ingreso, $impMen, $impAnual);
        }
        return $oUser;
    }
}
?>
