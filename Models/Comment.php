<?php


namespace Models;


use DB\DB;

class Comment
{
    public $commentCount;

    //
    // returns current number(int) of comments to the post
    public static function countComments($postId): string {
        $query = 'SELECT COUNT(*) FROM Comments WHERE post_id = :postId';
        $a = DB::run($query, [':postId'=>$postId])->fetchColumn();
        return strval($a[0]);
    }

    public function getComments($postId): array {

    }
}