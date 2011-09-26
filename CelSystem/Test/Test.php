<?php
require_once '/../Model/Android.php';
require_once '/../Model/BlackBerry.php';
require_once '/../Model/IPhone.php';

$miIphone = new IPhone('I3');
print_r($miIphone);
print_r($miIphone->hasCamera());

$miBB = new BlackBerry('if045');
print_r($miBB);

$miAndroid = new Android('NewOne');
print_r($miAndroid);

?>
