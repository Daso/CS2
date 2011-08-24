<?php
    include 'langsettings.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title>
            <?php echo trim(@file_get_contents('../../install/xampp_modell.txt')); ?>
            <?php echo trim(@file_get_contents('../../install/xampp_version.txt')); ?>
        </title>
    </head>

    <body>
        <br><h1>
            <?php echo trim(@file_get_contents('../../install/xampp_modell.txt')); ?>
            <?php echo trim(@file_get_contents('../../install/xampp_version.txt')); ?>!
        </h1>
        <b><?php echo $TEXT['start-subhead']; ?></b>
        <p><?php echo $TEXT['start-text1']; ?></p>
        <p><?php echo $TEXT['start-text2']; ?></p>
        <p><?php echo $TEXT['start-text3']; ?></p>
        <p><?php echo $TEXT['start-text4']; ?></p>
        <p><?php echo $TEXT['start-text5']; ?></p>
        <p><?php echo $TEXT['start-text6']; ?></p>
    </body>
</html>
