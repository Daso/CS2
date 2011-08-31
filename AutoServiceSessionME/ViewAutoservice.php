<?php
class ViewAutoservice {
    public function __construct() {
        if ($_POST['modelo']==null){
            $this->_mostrarFormulario();
        }else{
            if ($_POST['placa'] != null){
                echo "registrado";
            }else{

            if($_POST['modelo'] == 1){
                $this->_mostrarFormularioSendan();
            }else{
                $this->_mostrarFormularioCamioneta();
            }
        }}
    }
    private function _mostrarFormulario(){
        require_once 'main.html';
    }

    private function _mostrarFormularioSendan(){
        require_once 'sedanHTML.html';
    }

    private function _mostrarFormularioCamioneta(){
        echo "Soy yo";
    }
}
$miView = new ViewAutoservice();

