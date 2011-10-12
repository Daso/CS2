<?php

interface ManejadorBaseDeDatosInterface {
    public function conectar();
    public function traerDatos(Sql $sql);
    public function desconectar();
}
?>
