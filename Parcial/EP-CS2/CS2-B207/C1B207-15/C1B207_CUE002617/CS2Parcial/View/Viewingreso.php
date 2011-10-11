<?php
class Viewingreso {
    
    public function _ejecutar() { 
        if(!isset($_POST['enero'])){
            $this->_mostrarDefault();
        }else {
            if(isset($_GET['ingresar'])){

            
            $ie = $_POST['e'];
            $if = $_POST['f'];
            $im = $_POST['m'];
            $iab = $_POST['ab'];
            $imy = $_POST['my'];
            $ijn = $_POST['jn'];
            $ijl = $_POST['jl'];
            $iag = $_POST['ag'];
            $iset = $_POST['set'];
            $ioc = $_POST['oc'];
            $inv = $_POST['nv'];
            $idc = $_POST['dc'];}
             
            }





    }

    private function _mostrarDefault(){
        require_once 'default.html';
    }
}

$vi = new Viewingreso();
$vi->_ejecutar();
?>
