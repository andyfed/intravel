<?php

$uri = $_SERVER['REQUEST_URI'];
$uri = explode("/", $uri);

if (empty($uri[1])) {
    //header($_SERVER['REQUEST_URI']."recent.php");
    //require_once "View/recent.php"; работает но хочу переход по header
    header('Location: http://test.com/View/recent.php');
} if ($uri[1]=="recent.php") {
    require_once "View/recent.php";

}
/*
 * позже добавить когда будет готова админка
if ($uri[1] == 'admin')
    @include_once "admin_panel.php";

 // утилита работы с MySQL
else if ($uri[1] == 'database')
    require_once "adminer-4.7.5-mysql.php";
*/

if (!empty($uri[1]))
    require "View/404.html";
    //header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    //header("HTTP/1.1 404 Not Found");
?>
