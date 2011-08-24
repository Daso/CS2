<?php
set_time_limit(0);

require_once 'PEAR/Info.php';

$info = new PEAR_Info('', '', '', array('channels' => array('pear.php.net', 'zend.googlecode.com/svn')));
$info->display();
?>
