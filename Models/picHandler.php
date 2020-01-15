<?php


namespace Models;

class picHandler
{
    //check type of input value and return suitable URI
    static function getMin($picLink): string {
        if (is_string($picLink))
            return picHandler::createPreviewLink($picLink);
        else
            return "/var/www/test.com/Storage/PostPics/plug.png";
    }

    // return changed URI of the post
    private static function createPreviewLink($picLink): string {
        return str_replace("/400", "/200", $picLink);
    }

    // still broken !!!
    private static function createMiniAvaLink($picLink): string {
        //TODO: make it for 'case 2' of getUserpic()
        $filename = file($picLink);
        $a = new SimpleImage($filename);
        $a = $a->resize(250,250);

    }


    public function getUserpic($userId) {
        $userpic = "/var/www/test.com/Storage/UserPics/$userId.jpg";
        $plug = "/../../Storage/UserPics/plug.jpg";

        if (!file_exists($userpic))
            return $plug;
        else
            return "/../../Storage/UserPics/$userId.jpg";
    }


}