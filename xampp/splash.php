<?php
    header("Content-Type: text/html; charset=iso-8859-1");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <link href="img/xampp.ico" rel="shortcut icon" type="image/x-icon">
        <title>
            <?php echo trim(@file_get_contents('../../install/xampp_modell.txt')); ?>
            <?php echo trim(@file_get_contents('../../install/xampp_version.txt')); ?>
        </title>
    </head>

    <body class="white" bgcolor="#ffffff">
        <center>
            <img src="img/blank.gif" alt="" height="180" width="1"><br>
            <img src="img/xampp-logo.jpg" alt="">
            <p>
            <?php
                include 'lang/languages.php';
                $i = 0;
                while (list($key, $value) = each($languages)) {
                    if ($i++) {
                        echo ' / ';
                    }
                    echo '<a href="/xampp/lang.php?'.$key.'">'.$value.'</a>';
                }
            ?>
            </p>
        </center>
    </body>
</html>
