<?php

namespace Models;
use DB\DB;

/* 1 current post essence:
 * Creates once. Constant.
 */
class Post {
    private $postId;
    private $authorId;
    private $postDate;  //stores in sec UNIX time
    private $picLink;
    private $picLinkMin;
    private $postDesc;
    private $commentCount = 0;
    private $postEssence;      //needed for rendering 'post' page


    // ДОДЕЛАТЬ метод для получения свойств
    public function __get($name)
    {
        // проверка property_exist()
    }

    //пример!! убрать потом
    $post->postId // так позже обращаться к свойствам

    public $dsn = "mysql:host=localhost;dbname=DB1";

    //return associative array of this object variables
    function createPostEssence() {
        $this->postEssence = array(
            'postId'=>$this->postId, 'authorId'=>$this->authorId, 'postDate'=>$this->postDate,
            'picLink'=>$this->picLink, 'picLinkMin'=>$this->picLinkMin,
            'postDesc'=>$this->postDesc, 'commentCount'=>$this->commentCount
            );
    }

    //return array with all class values
    public function getPost(): array {
        if ($this->postEssence)
            return $this->postEssence;
        else {
            $this->createPostEssence();
            return $this->postEssence;
        }
    }

    //constructor
    public function __construct($postId) {
        $this->createPostObject($postId);
        $this->createPostEssence();
    }

    function createPostObject($postId){
        $this->postId = intval($postId);
        $postId = intval($postId);

        $sql_authorId = 'SELECT user_id FROM Posts WHERE post_id = :post_id LIMIT 1';
        $sql_postDate = 'SELECT date_time FROM Posts WHERE post_id = :post_id LIMIT 1';
        $sql_picLink = 'SELECT pic_link FROM Posts WHERE post_id = :post_id LIMIT 1';
        $sql_postDesc = 'SELECT text FROM Posts WHERE post_id = :post_id LIMIT 1';

        $this->authorId = DB::run($sql_authorId,[':post_id'=>$postId])->fetchColumn();
        $this->postDate = DB::run($sql_postDate,[':post_id'=>$postId])->fetchColumn();
        $this->picLink = DB::run($sql_picLink,[':post_id'=>$postId])->fetchColumn();
        $this->postDesc = DB::run($sql_postDesc,[':post_id'=>$postId])->fetchColumn();

        $this->createPreviewLink();
        $this->picLinkMin = $this->getMini();
        $this->commentCount = $this->getCommentCount($postId);
    }

    // метод создает ссылку на миниатюру изображения
    function createPreviewLink(): void {
        $this->picLinkMin = str_replace("/400", "/200", $this->picLink);
    }

    //метод возвращает ссылку на миниатюру изображения
    public function getMini(): string {
        return $this->picLinkMin;
    }

    // метод считает и возвращает количество комментов/ сейчас возвращает PDO statement!!!
    function getCommentCount($postId): int {
        $postId = intval($postId);
        $sql = 'SELECT COUNT(com_id) FROM Comments WHERE post_id = :postId';
        $count = DB::run($sql,[':postId'=>$postId])->fetchColumn();
        return intval($count);
    }

    //return URI of the post
    public function getPostIdLink(): string {
        $host = $_SERVER['HTTP_HOST'];
        $protocol = $_SERVER['REQUEST_SCHEME'];

        return ''.$protocol.'://'.$host.'/gallery/post/'.$this->postId.'';
    }
}