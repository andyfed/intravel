<?php

//strong types ON(1)
//declare(strict_types=1);

//убрать при продакшене
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//autoload (PSR-0)
require_once __DIR__ . '/System/autoload.php';

//routing run
System\App::run();



/*
// OLD VERSION of routing

$uri = $_SERVER['REQUEST_URI'];
$uri = explode("/", $uri);

if (empty($uri[1])) {
    //header($_SERVER['REQUEST_URI']."gallery.php");
    require_once "Controllers/recentPageController.php";
}

if ($uri[1]==="recent" && $uri[2]==="1")
    require_once "Controllers/recentPageController.php?page=1";

// 404
else {
    require_once "Views/404.php";
    //(!empty($uri[1]))
//header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
//header("HTTP/1.1 404 Not Found");
}

// позже добавить когда будет готова админка
if ($uri[1] == 'admin')
    @include_once "admin_panel.php";

 // утилита работы с MySQL - не работает (404)
if ($uri[1] == 'database')
    require_once "adminer-4.7.5-mysql.php";


*/
