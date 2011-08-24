<?php
require_once 'Dado.php';
class Craps {
    private $_dado1;
    private $_dado2;
    private $_punto;
    private $_suma;
    private $_turno;
    private $_termino;
    public function __construct() {
        
        
        
        $this->_lanzarDados(); 
        if(!isset($_POST['turno'] )){
             $this->_turno = 0;
        }  else {
            $this->_turno = $_POST['turno']; 
             $this->_punto = $_POST['punto'];
            
        }
        $resultado = $this->_evaluarJuego();
        $valorDado1 = $this->_dado1->getCara();        
        $valorDado2 = $this->_dado2->getCara();
        $punto = $this->_punto;
        $suma = $this->_suma;
        $termino = $this->_termino;
        $this->mostrarJuego($valorDado1, $valorDado2, $resultado,$punto,$suma,$termino);
        
    }
    
    private function _lanzarDados(){
             $this->_dado1 = new Dado();
             $valorDado1 = $this->_dado1->getCara();
             $this->_dado2 = new Dado();
             $valorDado2 = $this->_dado2->getCara();
             $this->_suma =  $valorDado1 + $valorDado2;
    }
  
    private function _evaluarJuego(){
        
        if($this->_turno==0){
            switch($this->_suma){
                case 7:
                case 11:$resultado = "Ganaste"; $this->_termino = true; break;
                case 2:
                case 3:
                case 12:$resultado = "Perdiste"; $this->_termino = true; break;
                default: $this->_punto= $this->_suma;$resultado = $this->_suma;
            }
        }else{          
            
            if($this->_suma==7){
                $resultado = "Perdiste";
                $this->_termino = true;
            }elseif($this->_suma == $this->_punto){
                    $resultado = "Ganaste";
                    $this->_termino = true;
                }else{
                   
                    $resultado = "Incierto, debes buscar el valor del punto. Vuelve a lanzar";
                }
            
                
        }
        return $resultado;
    }
    
    private function mostrarJuego($valorDado1, $valorDado2, $resultado,$punto,$suma,$termino){
        require_once 'Craps.html';
    }
}
$miCraps=new Craps();

?>
