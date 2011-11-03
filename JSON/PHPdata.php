<?php
$str_obj_json = '{
   "elemento1": "valor1",
   "elemento2": 22,
   "elemento3": null,
   "masCosas": {
      "voy": "ahora",
      "vengo": "ya"
   }
}';
$obj_php = json_decode($str_obj_json);
print_r($obj_php);
?>