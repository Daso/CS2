<?php
$str_obj_json= file_get_contents('http://api.flickr.com/services/feeds/photos_public.gne?format=json&jsoncallback=?');
$obj_php = json_decode($str_obj_json);
print_r($str_obj_json);
?>