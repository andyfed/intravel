<?php


$uri = $_SERVER['REQUEST_URI'];
$uri = explode("/", $uri);

if (empty($uri[1])) {
    //header($_SERVER['REQUEST_URI']."recent.php");
    require_once "Controller/recentPageController.php";
}

if ($uri[1]==="recent" && $uri[2]==="1") {
    require_once "Controller/recentPageController.php?page=1";
}



/*
 * позже добавить когда будет готова админка
if ($uri[1] == 'admin')
    @include_once "admin_panel.php";

 // утилита работы с MySQL - не работает (404)
if ($uri[1] == 'database')
    require_once "adminer-4.7.5-mysql.php";
*/

else {
    require_once "View/404.html";
    //(!empty($uri[1]))
//header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
//header("HTTP/1.1 404 Not Found");
}

