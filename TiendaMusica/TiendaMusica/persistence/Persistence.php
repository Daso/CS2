<?php
require_once '/../ds/BaseDeDatos.php';
require_once '/../dm/MySql.php';
abstract class Persistence {
  static private function _conectarBD(){
      $cn = new BaseDeDatos(new MySQL());
      return $cn;
  }

  static public function consultar(SQL $sql){
      $db=Persistence::_conectarBD();
      $respuesta = $db->ejecutar($sql);
      return $respuesta;
  }
}
?>
