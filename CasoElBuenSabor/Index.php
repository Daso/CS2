<?php

abstract class Index {
    public static function ejecutar(){
        header('location:view/Main.php');
    }
}
Index::ejecutar();