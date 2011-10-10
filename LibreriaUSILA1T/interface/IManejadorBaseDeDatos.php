<?php
interface IManejadorBaseDeDatos {
   public function conectar();
   public function traerDatos(SQL $sql);
   public function desconectar();
}

