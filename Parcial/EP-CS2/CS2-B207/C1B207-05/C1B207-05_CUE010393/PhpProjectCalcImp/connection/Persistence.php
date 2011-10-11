<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persistence
 *
 * @author alumno
 */
abstract class Persistence {
    private static $_connection;

    public static function connect() {
        self::$_connection = mysql_connect('localhost', 'root');
        mysql_select_db('impuestos');
    }

    public static function query($query, $type) {
        if($type == 1) {
            mysql_query($query, self::$_connection);
        }elseif($type == 2) {
            $result = mysql_query($query, self::$_connection);
            while($row = mysql_fetch_assoc($result)) {
                $table[] = $row;
            }
            return $table;
        }
    }

}
?>
