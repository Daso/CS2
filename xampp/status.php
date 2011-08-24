<?php
    include "langsettings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title><?php echo $TEXT['status-head']; ?></title>
    </head>

    <body>
        <br><h1><?php echo $TEXT['status-head']; ?></h1>

        <?php echo $TEXT['status-text1']; ?><p>

        <?php
            function line($text, $status, $link = "") {
                global $i, $TEXT;

                if ($i > 0) {
                    echo "<tr valign='bottom'>";
                    echo "<td bgcolor='#ffffff' height='1' style='background-image:url(img/strichel.gif)' colspan='5'></td>";
                    echo "</tr>";
                }
                echo "<tr bgcolor='#ffffff'>";
                echo "<td bgcolor='#ffffff'><img src='img/blank.gif' alt='' width='1' height='20'></td>";
                echo "<td class='tabval'>";
                echo "$text";
                echo "</td>";
                if (trim($status) == "OK") {
                    echo "<td><span class='green'>&nbsp;".$TEXT['status-ok']."&nbsp;</span></td>";
                    echo "<td></td>";
                    $i++;
                } else {
                    echo "<td><span class='red'>&nbsp;".$TEXT['status-nok']."&nbsp;</span></td>";
                    if ($link == "") {
                        echo "<td></td>";
                    } else {
                        echo "<td><a target='faq' href='$link'><span style='font-size: 10pt'>".$TEXT['status-lookfaq']."</span></a></td>";
                    }
                }
                echo "<td bgcolor='#ffffff'></td>";
                echo "</tr>";
                $i++;
            }

            echo "<table border='0' cellpadding='0' cellspacing='0'>";
            echo "<tr valign='top'>";
            echo "<td bgcolor='#fb7922' valign='top'><img src='img/blank.gif' alt='' width='10' height='0'></td>";
            echo "<td bgcolor='#fb7922' class='tabhead'><img src='img/blank.gif' alt='' width='250' height='6'><br>".$TEXT['status-tab1']."</td>";
            echo "<td bgcolor='#fb7922' class='tabhead'><img src='img/blank.gif' alt='' width='100' height='6'><br>".$TEXT['status-tab2']."</td>";
            echo "<td bgcolor='#fb7922' class='tabhead'><img src='img/blank.gif' alt='' width='100' height='6'><br>".$TEXT['status-tab3']."</td>";
            echo "<td bgcolor='#fb7922' valign='top'><br><img src='img/blank.gif' alt='' width='1' height='10'></td>";
            echo "</tr>";

            ini_set('default_socket_timeout', 2);

            $hostauth = '';
            if (!empty($_SERVER['PHP_AUTH_USER'])) {
                $hostauth .= $_SERVER['PHP_AUTH_USER'];
                if (!empty($_SERVER['PHP_AUTH_PW'])) {
                    $hostauth .= ':'.$_SERVER['PHP_AUTH_PW'];
                }
                $hostauth .= '@';
            }

            $a = @file("http://{$hostauth}127.0.0.1/xampp/ip.html");
            $ipv4 = $a[0];
            $a = @file("http://{$hostauth}[::1]/xampp/ip.html");
            $ipv6 = $a[0];
            if ('OK' == $ipv6) {
                $host = '[::1]';
            } else {
                $host = '127.0.0.1';
            }
            $ip = '127.0.0.1';



            $a = @file("http://{$hostauth}{$host}/xampp/php.php");
            $php = $a[0];
            $a = @file("http://{$hostauth}{$host}/xampp/perl.pl");
            $perl = $a[0];
            $a = @file("http://{$hostauth}{$host}/xampp/asp.asp");
            $asp = $a[0];
            $a = @file("http://{$hostauth}{$host}/xampp/mysql.php");
            $mysql = $a[0];
            $a = @file("http://{$hostauth}{$host}/xampp/cgi.cgi");
            $cgi = $a[0];
            $a = @file("http://{$hostauth}{$host}/xampp/ssi.shtml");
            $ssi = $a[0];
            if (false === @fsockopen("ssl://{$host}", 443)) {
                $ssl = "NOK";
            } else {
                $ssl = "OK";
            }

            $i = 0;

            line($TEXT['status-mysql'], $mysql);
            line($TEXT['status-php'], $php);
            line($TEXT['status-perl'], $perl);
            line($TEXT['status-asp'], $asp);
            line($TEXT['status-ssl'], $ssl);
            line($TEXT['status-cgi'], $cgi);
            line($TEXT['status-ssi'], $ssi);
            line($TEXT['status-ipv4'], $ipv4);
            line($TEXT['status-ipv6'], $ipv6);

            list($partwampp, $directorwampp) = preg_split('|\\\htdocs\\\xampp|', dirname(__FILE__));

            if (file_exists("$partwampp\\MercuryMail\\MERCURY.INI")) {
                if (false === @fsockopen($ip, 25)) {
                    $smtp = "NOK";
                } else {
                    $smtp = "OK";
                }
                line($TEXT['status-smtp'], $smtp);
            }

            if (file_exists("$partwampp\\FileZillaFTP\\FileZilla Server.xml")) {
                if (false === @fsockopen($ip, 21)) {
                    $ftp = "NOK";
                } else {
                    $ftp = "OK";
                }
                line($TEXT['status-ftp'], $ftp);
            }

            if (file_exists("$partwampp\\tomcat\\conf\\server.xml")) {
                if (false === @fsockopen($ip, 8080)) {
                    $tomcat = "NOK";
                } else {
                    $tomcat = "OK";
                }
                line($TEXT['status-tomcat'], $tomcat);
            }


            echo "<tr valign='bottom'>";
            echo "<td bgcolor='#fb7922'></td>";
            echo "<td bgcolor='#fb7922' colspan='3'><img src='img/blank.gif' alt='' width='1' height='8'></td>";
            echo "<td bgcolor='#fb7922'></td>";
            echo "</tr>";
            echo "</table>";
        ?>

        <p><?php echo $TEXT['status-text2']; ?></p>

    </body>
</html>
