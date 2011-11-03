<?php
$url = "semana.json";
echo (var_dump($url));
function leer_contenido_completo($url){
   $fichero_url = fopen ($url, "r");
   $texto = "";
   while ($trozo = fgets($fichero_url, 1024)){
      $texto .= $trozo;
   }
   return $texto;
}

$texto = leer_contenido_completo($url);

$obj_php = json_decode($texto);
print_r($obj_php);
?>