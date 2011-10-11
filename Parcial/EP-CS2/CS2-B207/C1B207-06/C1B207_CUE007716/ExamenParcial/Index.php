<?php

abstract class Index {

        public static function ejecutar(){
            header('location:View/Main.php');
        }

}


Index::ejecutar();
