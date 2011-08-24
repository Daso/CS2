<?php
    include 'langsettings.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>

    <body style="background: #ffffff; margin-top: 8px; margin-left: 8px;">
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td><img src="img/blank.gif" alt="" width="89" height="1"></td>
                <?php if (file_get_contents("../../install/xampp_language.txt") == "de") { ?>
                    <td><a target="content" href="http://www.apachefriends.org/xampp.html"><img border="0" src="img/xampp-logo-new.gif" alt=""></a></td>
                <?php } else { ?>
                    <td><a target="content" href="http://www.apachefriends.org/xampp-en.html"><img border="0" src="img/xampp-logo-new.gif" alt=""></a></td>
                <?php } ?>
                <td><img src="img/blank.gif" alt="" width="5" height="1"></td>
                <?php if (file_get_contents('../../install/xampp_language.txt') == "de") { ?>
                <td><img src="img/head-fuer.gif" alt=""></td>
                <?php } else { ?>
                <td><img src="img/head-for.gif" alt=""></td>
                <?php } ?>
                <td><img src="img/blank.gif" alt="" width="10" height="1"></td>
                <td><img src="img/head-windows.gif" alt=""></td>
                <td width="90%" id="langsel">
                    <div>
                    <?php
                        include 'lang/languages.php';
                        $l = file_get_contents('../../install/xampp_language.txt');
                        $i = 0;
                        while (list($key, $value) = each($languages)) {
                            if ($i++) {
                                echo ' / ';
                            }
                            $s = "";
                            if ($l == $key) {
                                $s = 'style="font-weight: bold;"';
                            }
                            echo '<a '.$s.' target="_parent" href="/xampp/lang.php?'.$key.'">'.$value.'</a>';
                        }
                    ?>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
