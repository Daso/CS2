<?php
    include 'langsettings.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="xampp.js"></script>
        <title></title>
    </head>

    <body class="n">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr valign="top">
                <td align="right" class="navi">
                    <img src="img/blank.gif" alt="" width="145" height="15"><br>
                    <span class="nh"><?php echo trim(@file_get_contents('../../install/xampp_modell.txt')); ?></span><br>
                    <span class="navi">[PHP: <?php echo phpversion(); ?>]</span><br><br>
                </td>
            </tr>
            <tr>
                <td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td>
            </tr>
            <tr valign="top">
                <td align="right" class="navi">
                    <a name="start" id="start" class="nh" target="content" onclick="h(this);" href="start.php"><?php echo $TEXT['navi-welcome']; ?></a><br>
                    <a class="n" target="content" onclick="h(this);" href="status.php"><?php echo $TEXT['navi-status']; ?></a><br>
                    <a class="n" target="new" onclick="h(this);" href="/security/lang.php?<?php echo file_get_contents("../../install/xampp_language.txt"); ?>"><?php echo $TEXT['navi-security']; ?></a><br>
                    <a class="n" target="content" onclick="h(this);" href="manuals.php"><?php echo $TEXT['navi-doc']; ?></a><br>
                    <a class="n" target="content" onclick="h(this);" href="components.php"><?php echo $TEXT['navi-components']; ?></a><br>
                    <a class="n" target="content" onclick="h(this);" href="phpinfo.php">phpinfo()</a><br>
                    <a class="n" target="content" onclick="h(this);" href="pearinfo.php">pearinfo()</a><br>
                    <a class="n" target="content" onclick="h(this);" href="perlinfo.pl">perlinfo()</a><br>
                    <a class="n" target="content" onclick="h(this);" href="aspinfo.asp">aspinfo()</a><br><br>
                    <span class=nh><?php echo $TEXT['navi-demos']; ?></span><br>
                </td>
            </tr>
            <tr><td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td></tr>
            <tr valign="top">
                <td align="right" class="navi">
                    <?php
                        $navi = array('navibasics.inc', 'naviperl.inc', 'navipython.inc', 'navijava.inc');
                        foreach ($navi as $inc) {
                            if (is_readable($inc)) {
                                include $inc;
                            }
                        }
                    ?>
                    <br><br><span class="nh"><?php echo $TEXT['navi-tools']; ?></span><br>
                </td>
            </tr>
            <tr>
                <td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td>
            </tr>
            <tr valign="top">
                <td align="right" class="navi">
                    <?php
                        $navi = array('navitools.inc', 'naviservers.inc', 'naviother.inc');
                        foreach ($navi as $inc) {
                            if (is_readable($inc)) {
                                include $inc;
                            }
                        }
                    ?>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td>
            </tr>
            <tr valign="top">
                <td align="right" class="navi">
                    <p class="navi">&copy;2002-2009<br>
                    <?php if (file_get_contents('../../install/xampp_language.txt') == "de") { ?>
                    <a target=content href="http://www.apachefriends.org/de/"><img border="0" alt="" src="img/apachefriends.gif"></a></p>
                    <?php } else { ?>
                    <a target=content href="http://www.apachefriends.org/en/"><img border="0" alt="" src="img/apachefriends.gif"></a></p>
                    <?php } ?>
                </td>
            </tr>
        </table>
    </body>
</html>
