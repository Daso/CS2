<?php
session_start();
require_once 'SedanService.php';
require_once 'CamionetaService.php';
class ControAutoService {
   
    private $_miSession = Array();
    public function run()
    {
        $this->_miSession = $_SESSION['listaAutos'];
        
        
            $this->registrar();
            $this->mostrarResumen();
           
            
        }

    

    public function registrar()
    {
       if($_POST['modeloCam1']== null){
       $miSedan1 = new SedanService($_POST['marcaSedan1'],$_POST['placaSedan1']);
       $miSedan1->total($_POST['lavado1'],$_POST['afinamiento1'],$_POST['niveles1']);       
       $this->_addAutoService($miSedan1);
       }else{


       $miCamioneta1 = new CamionetaService($_POST['marcaCam1'],$_POST['placaCam1'],$_POST['modeloCam1']);       
       $miCamioneta1->total($_POST['lavado4'],$_POST['afinamiento4'],$_POST['niveles4']);
       $this->_addAutoService($miCamioneta1);
       }
        $_SESSION['listaAutos']=$this->_miSession;
       

    }

    private function _addAutoService($service)
    {
       // $this->_colAutoServices[]=$service;
        $this->_miSession[] = $service;
        
    }

    public function mostrarFormulario()
    {
        require_once 'autoform.php';
    }

    public function mostrarResumen()
    {
       
         foreach($this->_miSession as $servicio){
                echo $servicio->mostrarServicio()."<br />";
         }
         echo '<a href="index.php">Volver</a><br>';
         echo '<a href="salir.php">Salir</a>';
    }
}
$control = new ControAutoService();
$control->run();

