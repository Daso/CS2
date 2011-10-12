
<?php


require_once '/modelo/salario.php';
require_once '/persistencia/persistencia.php';

class control {
    private $arreglo;
private $_suma;
    public function _ejecutar() {


        if (isset ($_POST['en'])) {

 $ene=$_POST['en'];
$feb=$_POST['fe'];
$mar=$_POST['mz'];
$abri=$_POST['ab'];
$may=$_POST['my'];
$jn=$_POST['jn'];
$jl=$_POST['jl'];
$ag=$_POST['ago'];
$set=$_POST['set'];
$oct=$_POST['oct'];
 $nov=$_POST['nov'];
 $dic=$_POST['dic'];
  $this->arreglo=$_SESSION['salario'  ];
  $misal=new salario($ene, $feb, $mar, $abri, $may, $jn, $jl, $ag, $set, $oct, $nov, $dic);
  $this->arreglo[]=$misal;

  $this->getRespuesta($this->arreglo);


        }
        else {
            $this->_getHtml();
        }



    }



public function insertar($ene,$feb,$mar,$abr,$my,$jn,$jl,$ag,$set,$oct,$nov,$dic,$anual,$imp,$totalPagar) {

    $miper=persistencia::_getInstancia();
    $miper->_insertar($ene,$feb,$mar,$abr,$my,$jn,$jl,$ag,$set,$oct,$nov,$dic,$anual,$imp,$totalPagar);
    echo("se insertaron los datos");


}


public function getRespuesta($arreglo) {
    require_once '/vista/respuesta.html';
}

public function _getHtml() {
    require_once '/vista/formulario.html';
}


public function calcularTotal($arreglo) {
    foreach ($arreglo as $valor) {
        $this->_suma=$this->_suma+ $valor;



    }
    return $this->_suma;
    }


}
?>
