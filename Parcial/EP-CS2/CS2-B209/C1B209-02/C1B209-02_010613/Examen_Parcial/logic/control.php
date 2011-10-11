<?php
require_once '/../model/impuestos.php';
class control {

    public function ingresar($id,$nombre,$apellido,$mes1,$mes2,$mes3,$mes4,$mes5,$mes6,
        $mes7,$mes8,$mes9,$mes10,$mes11,$mes12){
        $ob = new impuestos($id, $nombre, $apellido, $mes1, $mes2, $mes3,
            $mes4, $mes5, $mes6, $mes7, $mes8, $mes9, $mes10, $mes11, $mes12);
        $ob->insertarMes();
    }

    public function calcularImpuestos($mes1,$mes2,$mes3,$mes4,$mes5,$mes6,$mes7,$mes8,$mes9,$mes10,$mes11,$mes12){
        $total = $mes1+ $mes2+$mes3+$mes4+$mes5+$mes6+$mes7+$mes8+$mes9+$mes10+$mes11+$mes12;
        $acum = 0;
        $totalAcum =0;
        $impuestos = array();
        for($i == 1; $i<12 ; $i++){
            if($mes.$i >2500){
                $acum = $mes.$i * 0.01;
                $totalAcum += $acum;
                
            }else {
                $acum = $mes.$i * 0.007;
                $totalAcum += $acum;
            }
        }
        $SinIm = $total-$totalAcum;
        if($SinIm > 24000){
            $extra = $SinIm * 0.3;
            $SinExtra = $SinIm - $extra;
        }
        $impuestos[0] = $total;
        $impuestos[1] = $totalAcum;
        $impuestos[2] = $extra;
        $impuestos[3] = $SinExtra;
        return $impuestos;
    }




}
?>
