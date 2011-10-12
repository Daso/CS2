<?php

class persistencia {


    private static $_instancia;

    public static function _getInstancia() {

        try {
              if (!self::$_instancia) {

            self::$_instancia=new persistencia();


        }

        } catch (Exception $e) {
            throw $e;
        }

        return  self::$_instancia;

    }


    private $_coneccion;


    public function __construct() {

        $this->_coneccion=mysql_connect('localhost', 'root');

        if (!$this->_coneccion) {
            throw new Exception('error al conectarse con el servidor');
        }


        $db=mysql_select_db('impuesto',$this->_coneccion);

        if (!$db) {
            $db=null;
            throw new Exception('error al conectarse con la base de datos');
        }

        
    }



    public function _insertar($ene,$feb,$mar,$abr,$my,$jn,$jl,$ag,$set,$oct,$nov,$dic,$anual,$imp,$totalPagar) {

        $sql = "INSERT INTO `impuesto`.`sueldo` (`enero`, `febrero`, `marzo`, `abril`, `mayo`, `junio`, `julio`, `agosto`, `setiembre`, `octubre`, `noviembre`, `diciembre`, `IngresoAnual`, `impuesto`, `totalPagar`)
VALUES ('$ene', '$feb', '$mar', '$abr', '$my', '$jn', '$jl', '$ag', '$set', '$oct', '$nov', '$dic', '$anual', '$imp', '$totalPagar');";

        mysql_query($sql);
        echo("se insertio");



    }







}
?>
