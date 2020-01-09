<?php


namespace Models;


class picHandler
{
    //check type of input value and return suitable URI
    static function getMin($picLink): string {
        if (is_string($picLink))
            return picHandler::createPreviewLink($picLink);
        else
            return "plug.png";
    }

    // return changed URI of the post
    private static function createPreviewLink($picLink): string {
        return str_replace("/400", "/200", $picLink);
    }




}