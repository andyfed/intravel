<?php

namespace Models;

use DB\DB;

class PostRepository  implements Repository
{
    public function add($item)
    {
        // TODO: Implement add() method.
    }

    public function update($item)
    {
        // TODO: Implement update() method.
    }

    public function delete($item)
    {
        // TODO: Implement delete() method.
    }

    //returns new Post by id
    public function getById($postId): object
    {
        $query = 'SELECT * FROM Posts WHERE post_id = :id';
        return DB::run($query, [':id'=>intval($postId)])->fetchObject();
    }

    // returns array of Post objects
    public function getByIds(array $postIds): array
    {
        foreach ($postIds as $id)
            $postsArray[] = $this->getById($id["post_id"]);
        return $postsArray;
    }

    //return full absolute URL of the post
    static function getPostLink($postId): string {
        if (is_string($postId) || is_int($postId)) {
            $host = $_SERVER['HTTP_HOST'];
            $protocol = $_SERVER['REQUEST_SCHEME'];

            return '' . $protocol . '://' . $host . '/gallery/post/' . $postId . '';
        }
    }
}