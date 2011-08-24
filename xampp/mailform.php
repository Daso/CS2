<?php
    include "langsettings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title><?php echo $TEXT['mail-head']; ?></title>
    </head>

    <body>
        <br><h1><?php echo $TEXT['mail-head']; ?></h1>
        <a href="mercury-help.php"><?php echo $TEXT['mail-hinweise']; ?></a><br><br>

        <form method="post" action="mailsend.php">
            <table width="600" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="left" width="200"><?php echo $TEXT['mail-adress']; ?></td>
                    <td align="left" width="400"><input type="text" name="knownsender" size="40" value="postmaster@localhost"></td>
                </tr>

                <tr>
                    <td align="left" width="200"><?php echo $TEXT['mail-adressat']; ?></td>
                    <td align="left" width="400"><input type="text" name="recipients" size="40" value="newuser@localhost"></td>
                </tr>

                <tr>
                    <td align="left" width="200"><?php echo $TEXT['mail-cc']; ?></td>
                    <td align="left" width="400"><input type="text" name="ccaddress" size="40"></td>
                </tr>

                <tr>
                    <td align="left" width="200"><?php echo $TEXT['mail-subject']; ?></td>
                    <td align="left" width="400"><input type="text" name="subject" size="40"></td>
                </tr>

                <tr>
                    <td align="left" width="200">&nbsp;</td>
                    <td align="center" width="400">&nbsp;</td>
                </tr>

                <tr>
                    <td align="left" width="200"><?php echo $TEXT['mail-message']; ?></td>
                    <td align="left" width="400"><textarea rows="6" name="message" cols="34"></textarea></td>
                </tr>

                <tr>
                    <td align="left" width="200">&nbsp;</td>
                    <td align="center" width="400">&nbsp;</td>
                </tr>

                <tr>
                    <td align="left" width="200">&nbsp;</td>
                    <td align="left" width="400"><input type="submit" value="Send"> * <input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
        <br><br><br>
        ######## <a href="http://localhost:2224" target="_new"><i>Mercury HTTPD Server listen on Port 2224</i></a> ########

    </body>
</html>
