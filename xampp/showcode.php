<?php
    echo '<br><br>';
    if ($_REQUEST['showcode'] != 1) {
        echo '<a href="'.$_SERVER['PHP_SELF'].'?showcode=1">'.$TEXT['global-showcode'].'</a>';
    } else {
        $file = file_get_contents(basename($_SERVER['PHP_SELF']));
        echo "<h2>".$TEXT['global-sourcecode']."</h2>";
        echo "<textarea cols='100' rows='10'>";
        echo htmlspecialchars($file);
        echo "</textarea>";
    }
?>
