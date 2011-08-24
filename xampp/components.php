<?php
    include "langsettings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title><?php echo $TEXT['components-head']; ?></title>
    </head>

    <body>
        <br><h1><?php echo $TEXT['components-head']; ?></h1>

        <p><?php echo $TEXT['components-text1']; ?></p>
        <p><?php echo $TEXT['components-text2']; ?></p>

        <p><?php include "softwarelist.inc"; ?></p>

        <p><?php echo $TEXT['components-text3']; ?></p>
    </body>
</html>
