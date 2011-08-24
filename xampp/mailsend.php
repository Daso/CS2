<?php
    include "langsettings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title><?php echo $TEXT['mail-sendnow']; ?></title>
    </head>

    <body>
        <br><h1><?php echo $TEXT['mail-sendnow']; ?></h1>
        <?php
            if (empty($_POST['knownsender'])) {
                $_POST['knownsender'] = '';
            } else {
                $_POST['knownsender'] = str_replace(array("\r\n", "\n", "\r", ","), "", $_POST['knownsender']);
            }
            if (empty($_POST['recipients'])) {
                $_POST['recipients'] = '';
            } else {
                $_POST['recipients'] = str_replace(array("\r\n", "\n", "\r", ","), "", $_POST['recipients']);
            }
            if (empty($_POST['ccaddress'])) {
                $_POST['ccaddress'] = '';
            } else {
                $_POST['ccaddress'] = str_replace(array("\r\n", "\n", "\r", ","), "", $_POST['ccaddress']);
            }
            if (empty($_POST['subject'])) {
                $_POST['subject'] = '';
            } else {
                $_POST['subject'] = str_replace(array("\r\n", "\n", "\r"), "", $_POST['subject']);
            }
            if (empty($_POST['message'])) {
                $_POST['message'] = '';
            }
            $mailtos = $_POST['recipients'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if (trim($_POST['ccaddress']) == "") {
                $header = "From: $_POST[knownsender]";
            } else {
                $header .= "From: $_POST[knownsender]\r\n";
                $header .= "Cc: $_POST[ccaddress]";
            }

            if (@mail($mailtos, $subject, $message, $header)) {
                echo "<p><i>".$TEXT['mail-sendok']."</i></p>";
            } else {
                echo "<p><i>".$TEXT['mail-sendnotok']."</i></p>";
            }
        ?>
        <p><a href="javascript:history.back()">Zurück zum Formular</a></p>
    </body>
</html>
