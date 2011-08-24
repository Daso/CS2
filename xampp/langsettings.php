<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

    $lang = @file_get_contents('../../install/xampp_language.txt');
    @include 'lang/languages.php';
    @include 'lang/en.php';
    @include "lang/$lang.php";
    if ($lang == 'zh') {
        header("Content-Type: text/html; charset=gb2312");
    } elseif ($lang == 'jp') {
        header("Content-Type: text/html; charset=shift-jis");
    } else {
        header("Content-Type: text/html; charset=iso-8859-1");
    }

    function stripslashes_deep($value) {
        $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
        return $value;
    }
    if (get_magic_quotes_gpc()) {
        $_POST = stripslashes_deep($_POST);
        $_GET = stripslashes_deep($_GET);
        $_COOKIE = stripslashes_deep($_COOKIE);
        $_REQUEST = stripslashes_deep($_REQUEST);
    }

    if (get_magic_quotes_runtime()) {
        set_magic_quotes_runtime(false);
    }
?>
