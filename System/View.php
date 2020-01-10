<?php

namespace System;

class View
{
    public static $data;
    public $keys = [];
    public $values = [];

    public static function render(string $path, array $data){
        self::$data = $data;
        $fullPath = __DIR__.'/../Views/'.$path.'.php';

        if (!file_exists(($fullPath)))
            throw new \ErrorException('View '.$path.' cannot be found!');

        // убрать?
        /*
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $keys[] = $key;
                $values[] = $value;
            }
        }
        */


        //show view to user
        include_once ''.$fullPath.'';

    }
}