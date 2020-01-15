<?php

//strong types ON(1)
//declare(strict_types=1);

//сессия, автоматически добавляет Cookie с полем PHPSESSID
session_start();

//отображение ошибок
//убрать при продакшене
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/


//autoload (PSR-0)
require_once __DIR__ . '/System/autoload.php';

//routing run
System\App::run();

