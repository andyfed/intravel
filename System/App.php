<?php
namespace System;
use Controllers;

/* Class App realizes routing from single entry point index.php to controllers.
 * Main essence is array $pathParts:
 * domain/controller/action/arg (0,1,2,3)
 */



class App {
    public static function run(){
        $path = $_SERVER['REQUEST_URI'];
        $pathParts = explode('/',$path);

        /* for test (dont work)
        $galleryController = new galleryController();
        $galleryController->actionRecent(1);
        */

        if ($pathParts[1]!=null) {
            $controller = $pathParts[1];
            $action = $pathParts[2];
            if ($pathParts[3]!=null) {
                $arg = $pathParts[3];
            } else $pathParts[3]=1;
        } else {
            $controller = 'gallery';
            $action = 'recent';
            $arg = 1;
        }

        $controller = 'Controllers\\'.$controller.'Controller';

        $action = 'action'.ucfirst($action);

        if (!class_exists($controller)) {
            throw new \ErrorException('Controller \'' . $controller . '\' does not exist!');
            //include_once '../Views/404.php';
        }

        $objController = new $controller();
        if (!method_exists($objController, $action))
            throw new \ErrorException('Action \''.$action.'\' does not exist!');

        $objController->$action($arg);
    }
}