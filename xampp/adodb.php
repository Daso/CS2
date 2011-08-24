<?php
    include "langsettings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
        <link href="xampp.css" rel="stylesheet" type="text/css">
        <title><?php echo $TEXT['ADOdb-head']; ?></title>
    </head>

    <body>
        <br><h1><?php echo $TEXT['ADOdb-head']; ?></h1>
        <p><?php echo $TEXT['ADOdb-text']; ?></p>
        <p><?php echo $TEXT['ADOdb-example']; ?></p>

        <?php
            if (empty($_POST['dbserver'])) {
                $_POST['dbserver'] = 'mysql';
            }
            if (empty($_POST['host'])) {
                $_POST['host'] = 'localhost';
            }
            if (empty($_POST['user'])) {
                $_POST['user'] = 'root';
            }
            if (empty($_POST['password'])) {
                $_POST['password'] = '';
            }
            if (empty($_POST['database'])) {
                $_POST['database'] = 'cdcol';
            }
            if (empty($_POST['table'])) {
                $_POST['table'] = 'cds';
            } else {
                $_POST['table'] = preg_replace('/.*?(\w+).*/', '\\1', $_POST['table']);
            }

            if (isset($_POST['adodb']) && ($_POST['adodb'] == "submit")) {
                if ($_POST['dbserver'] == "sqlite") {
                    include_once 'adodb/adodb-errorpear.inc.php';
                    include_once 'adodb/adodb.inc.php';
                    include_once 'adodb/tohtml.inc.php';
                    $db = ADONewConnection($_POST['dbserver']);
                    @$db->Connect($_POST['database'], '0666');
                    echo "<p><b>DBServer: $_POST[dbserver]</b></p>";
                    $result = $db->Execute("SELECT * FROM ".$_POST['table']);
                    if (!is_object($result)) {
                        $e = ADODB_Pear_Error();
                        echo '<p><b>'.htmlspecialchars($e->message).'</b></p>';
                    } else {
                        while (!$result->EOF) {
                            for ($i = 0, $max = $result->FieldCount(); $i < $max; $i++) {
                                echo htmlspecialchars($result->fields[$i]).' ';
                                $result->MoveNext();
                                echo "<br>";
                            }
                        }
                    }
                } else {
                    if (($_POST['dbserver'] == "mysql") || ($_POST['dbserver'] == "postgres7") || ($_POST['dbserver'] == "ibase") || ($_POST['dbserver'] == "mssql") || ($_POST['dbserver'] == "borland_ibase") || ($_POST['dbserver'] == "firebird") || ($_POST['dbserver'] == "mssqlpo") || ($_POST['dbserver'] == "maxsql") || ($_POST['dbserver'] == "oci8") || ($_POST['dbserver'] == "oci805") || ($_POST['dbserver'] == "oci8po") || ($_POST['dbserver'] == "postgres") || ($_POST['dbserver'] == "oracle") || ($_POST['dbserver'] == "postgres64") || ($_POST['dbserver'] == "sybase")) {
                        include_once 'adodb/adodb-errorpear.inc.php';
                        include_once 'adodb/adodb.inc.php';
                        include_once 'adodb/tohtml.inc.php';
                        $db = ADONewConnection($_POST['dbserver']);
                        @$db->Connect($_POST['host'], $_POST['user'], $_POST['password'], $_POST['database']);
                        echo "<p><b>DBServer: $_POST[dbserver]</b></p>";
                        $result = $db->Execute("SELECT * FROM ".$_POST['table']);
                        if (!is_object($result)) {
                            $e = ADODB_Pear_Error();
                            echo '<p><b>'.htmlspecialchars($e->message).'</b></p>';
                        } else {
                            while (!$result->EOF) {
                                for ($i = 0, $max = $result->FieldCount(); $i < $max; $i++) {
                                    echo htmlspecialchars($result->fields[$i]).' ';
                                    $result->MoveNext();
                                    echo "<br>";
                                }
                            }
                        }
                    } else {
                        print_r($TEXT['ADOdb-notdbserver']);
                    }
                }
            }
        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table width="720" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><?php echo $TEXT['ADOdb-dbserver']; ?></td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><?php echo $TEXT['ADOdb-host']; ?></td>
                </tr>

                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><input type="text" name="dbserver" size="40" value="<?php echo htmlspecialchars($_POST['dbserver']); ?>"></td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><input type="text" name="host" size="40" value="<?php echo htmlspecialchars($_POST['host']); ?>"></td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350">&nbsp;</td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350">&nbsp;</td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><?php echo $TEXT['ADOdb-user']; ?></td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><?php echo $TEXT['ADOdb-password']; ?></td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><input type="text" name="user" size="40" value="<?php echo htmlspecialchars($_POST['user']); ?>"></td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><input type="text" name="password" size="40" value="<?php echo htmlspecialchars($_POST['password']); ?>"></td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350">&nbsp;</td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350">&nbsp;</td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><?php echo $TEXT['ADOdb-database']; ?></td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><?php echo $TEXT['ADOdb-table']; ?></td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><input type="text" name="database" size="40" value="<?php echo htmlspecialchars($_POST['database']); ?>"></td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><input type="text" name="table" size="40" value="<?php echo htmlspecialchars($_POST['table']); ?>"></td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350">&nbsp;</td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350">&nbsp;</td>
                </tr>
                <tr>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350"><input type="submit" name="adodb" value="submit"></td>
                    <td align="left" width="10">&nbsp;</td>
                    <td align="left" width="350">&nbsp;</td>
                </tr>
            </table>
        </form>

        <?php include 'showcode.php'; ?>
    </body>
</html>
