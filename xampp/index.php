<?php
	if (@file_get_contents("../../install/xampp_language.txt") == "") {
    	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    		$uri = 'https://';
    	} else {
    		$uri = 'http://';
    	}
    	$uri .= $_SERVER['HTTP_HOST'];
    	header('Location: '.$uri.'/xampp/splash.php');
    	exit;
	}

	include 'langsettings.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
        "http://www.w3.org/TR/html4/frameset.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler">
        <meta http-equiv="cache-control" content="no-cache">
		<link href="xampp.css" rel="stylesheet" type="text/css">
        <link href="img/xampp.ico" rel="shortcut icon" type="image/x-icon">
        <title>
            <?php echo trim(@file_get_contents('../../install/xampp_modell.txt')); ?>
            <?php echo trim(@file_get_contents('../../install/xampp_version.txt')); ?>
        </title>
    </head>
    
    <frameset rows="74,*" frameborder="0" framespacing="0" border="0">
        <frame name="head" src="head.php" scrolling="no" marginwidth="0" marginheight="0">
        <frameset cols="150,*" frameborder="0" framespacing="0" border="0">
            <frame name="navi" src="navi.php" scrolling="no" marginwidth="0" marginheight="0">
            <frame name="content" src="start.php" marginwidth="20" marginheight="0">
        </frameset>
    </frameset>
</html>
