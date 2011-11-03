<?php
$str_obj_json= file_get_contents('http://semanaeconomica.com/front/index.json');
$obj_php = json_decode($str_obj_json);
print_r($obj_php);
?>