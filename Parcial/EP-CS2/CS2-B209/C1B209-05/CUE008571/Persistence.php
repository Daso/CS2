<?php

class Persistence {
private static $_instance = null;
public static function getInstance(){
try{
if(self::$instance == null ){
$this->instance = new getInstance();
}

}catch(Exception $e){
mysqli_sql_exception($message, $code);
}
}

}
?>

