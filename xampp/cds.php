<?php
    include "langsettings.php";

    list($partwampp, $directorwampp) = preg_split('|\\\htdocs\\\xampp|', dirname(__FILE__));
    $mypasswdtxt = "mysqlrootpasswd.txt";
    $mypasswdtxtdir = $partwampp."\security\\".$mypasswdtxt;

    if (file_exists($mypasswdtxtdir)) {
        $mypasswd = file_get_contents($mypasswdtxtdir);
        preg_match('/mysql password = (.*)/', $mypasswd, $mypasswd);
        $mypasswd = trim($mypasswd[1]);
    } else {
        $mypasswd = "";
    }

    if ($_REQUEST['action'] == "getpdf") {
        mysql_connect("localhost", "root", $mypasswd);
        mysql_select_db("cdcol");

        include ('fpdf/fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->SetFont('Helvetica', '', 14);
        $pdf->Write(5, 'CD Collection');
        $pdf->Ln();

        $pdf->SetFontSize(10);
        $pdf->Write(5, '© 2002/2003 Kai Seidler, oswald@apachefriends.org, GPL');
        $pdf->Ln();

        $pdf->Ln(5);


        $pdf->SetFont('Helvetica', 'B', 10);
        $pdf->Cell(40 ,7, $TEXT['cds-attrib1'], 1);
        $pdf->Cell(100 ,7, $TEXT['cds-attrib2'], 1);
        $pdf->Cell(20 ,7, $TEXT['cds-attrib3'], 1);
        $pdf->Ln();

        $pdf->SetFont('Helvetica', '', 10);

        $result=mysql_query("SELECT titel,interpret,jahr FROM cds ORDER BY interpret");

        while ($row = mysql_fetch_array($result)) {
            $pdf->Cell(40, 7, $row['interpret'], 1);
            $pdf->Cell(100, 7, $row['titel'], 1);
            $pdf->Cell(20, 7, $row['jahr'], 1);
            $pdf->Ln();
        }

        $pdf->Output();
        exit;
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title><?php echo $TEXT['cds-head-fpdf']; ?></title>
    </head>

    <body>
        <br><h1><?php echo $TEXT['cds-head-fpdf']; ?></h1>

        <p><?php echo $TEXT['cds-text1']; ?></p>
        <p><?php echo $TEXT['cds-text2']; ?></p>

        <?php
        //    Copyright (C) 2002/2003 Kai Seidler, oswald@apachefriends.org
        //
        //    This program is free software; you can redistribute it and/or modify
        //    it under the terms of the GNU General Public License as published by
        //    the Free Software Foundation; either version 2 of the License, or
        //    (at your option) any later version.
        //
        //    This program is distributed in the hope that it will be useful,
        //    but WITHOUT ANY WARRANTY; without even the implied warranty of
        //    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        //    GNU General Public License for more details.
        //
        //    You should have received a copy of the GNU General Public License
        //    along with this program; if not, write to the Free Software
        //    Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.


            if(!@mysql_connect("localhost", "root", $mypasswd)) {
                echo "<h2>".$TEXT['cds-error']."</h2>";
                die();
            }
            mysql_select_db("cdcol");
        ?>

        <h2><?php echo $TEXT['cds-head1']; ?></h2>

        <table border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#f87820">
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b><?php echo $TEXT['cds-attrib1']; ?></b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="200" height="6"><br><b><?php echo $TEXT['cds-attrib2']; ?></b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="50" height="6"><br><b><?php echo $TEXT['cds-attrib3']; ?></b></td>
                <td class=tabhead><img src="img/blank.gif" alt="" width="50" height="6"><br><b><?php echo $TEXT['cds-attrib4']; ?></b></td>
                <td><img src="img/blank.gif" alt="" width="10" height="25"></td>
            </tr>

            <?php
                if ($_REQUEST['interpret'] != "") {
                    if ($_REQUEST['jahr'] == "") {
                        $jahr = "NULL";
                    } else {
                        $jahr = intval($_REQUEST['jahr']);
                    }
                    $titel = mysql_real_escape_string($_REQUEST['titel']);
                    $interpret = mysql_real_escape_string($_REQUEST['interpret']);
                    mysql_query("INSERT INTO cds (titel,interpret,jahr) VALUES('$titel','$interpret',$jahr)");
                }

                if ($_REQUEST['action'] == "del") {
                    $id = intval($_REQUEST['id']);
                    mysql_query("DELETE FROM cds WHERE id=$id");
                }

                $result = mysql_query("SELECT id,titel,interpret,jahr FROM cds ORDER BY interpret");

                $i = 0;
                while ($row = mysql_fetch_array($result)) {
                    if ($i > 0) {
                        echo "<tr valign='bottom'>";
                        echo "<td bgcolor='#ffffff' colspan='6' style='background-image:url(img/strichel.gif)'><img src='img/blank.gif' alt='' width='1' height='1'></td>";
                        echo "</tr>";
                    }
                    echo "<tr valign='middle'>";
                    echo "<td class='tabval'><img src='img/blank.gif' alt='' width='10' height='20'></td>";
                    echo "<td class='tabval'><b>".htmlspecialchars($row['interpret'])."</b>&nbsp;</td>";
                    echo "<td class='tabval'>".htmlspecialchars($row['titel'])."&nbsp;</td>";
                    echo "<td class='tabval'>".$row['jahr']."&nbsp;</td>";

                    echo "<td class='tabval'><a onclick=\"return confirm('".$TEXT['cds-sure']."');\" href='cds.php?action=del&amp;id=".$row['id']."'><span class='red'>[".$TEXT['cds-button1']."]</span></a></td>";
                    echo "<td class='tabval'></td>";
                    echo "</tr>";
                    $i++;
                }

                echo "<tr valign='bottom'>";
                echo "<td bgcolor='#fb7922' colspan='6'><img src='img/blank.gif' alt='' width='1' height='8'></td>";
                echo "</tr>";
            ?>
        </table>

        <h2><?php echo $TEXT['cds-head2']; ?></h2>

        <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="get">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr><td><?php echo $TEXT['cds-attrib1']; ?>:</td><td><input type="text" size="30" name="interpret"></td></tr>
                <tr><td><?php echo $TEXT['cds-attrib2']; ?>:</td><td> <input type="text" size="30" name="titel"></td></tr>
                <tr><td><?php echo $TEXT['cds-attrib3']; ?>:</td><td> <input type=text size="5" name="jahr"></td></tr>
                <tr><td>&nbsp;</td><td><input type="submit" value="<?php echo $TEXT['cds-button2']; ?>"></td></tr>
            </table>
        </form>
        <?php include 'showcode.php'; ?>
    </body>
</html>
