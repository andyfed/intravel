<?php

namespace Models;
use DB;

/* 1 current post essence:
 * Creates once. Constant.
 */
class Post {


    private $postId;
    private $authorId;
    private $postDate;  //stores in sec UNIXtime - need to convert when show to user date('Y-m-d ')
                        //echo date('j.m.Y H:i:s', strtotime($postDate));
    private $picLink;
    private $picLinkMin;
    private $postDesc;
    private $commentCount = 0;
    private $postEssence = [];      //needed for 'post' page

    //return associative array of variables
    function createPostEssence()
    {
        global $postEssence;
        $postEssence = array(
            'postId'=>$this->postId, 'authorId'=>$this->authorId, 'postDate'=>$this->postDate,
            'picLink'=>$this->picLink, 'picLinkMin'=>$this->getMini(),
            'postDesc'=>$this->postDesc, 'commentCount'=>$this->getCommentCount()
            );
    }

    //return array with all class values
    public function getPost(): array {
        return $this->postEssence;
    }

    //constructor
    public function __construct($postId) {
        $this->createEssence($postId);
    }

    function createEssence($postId){
        include_once "../DB/DbConnect.php";
        $this->postId = $postId;
        global $authorId;
        global $postDate;
        global $picLink;
        global $picLinkMin;
        global $postDesc;
        global $commentCount;

        $authorId = 'SELECT user_id FROM Posts WHERE id = '.$this->postId.' LIMIT 1';
        $postDate = 'SELECT date_time FROM Posts WHERE id = '.$this->postId.' LIMIT 1';
        $picLink = 'SELECT pic_link FROM Posts WHERE id = '.$this->postId.' LIMIT 1';
        $postDesc = 'SELECT text FROM Posts WHERE id = '.$this->postId.' LIMIT 1';

        $this->createPreviewLink();
        $picLinkMin = $this->getMini();
        $commentCount = $this->getCommentCount();
    }

    // метод создает ссылку на миниатюру изображения
    function createPreviewLink(): void {
        $this->picLinkMin = str_replace("400", "200", $this->picLink);
    }

    //метод возвращает ссылку на миниатюру изображения
    public function getMini(): string {
        return $this->picLinkMin;
    }

    // метод считает и возвращает количество комментов
    function getCommentCount(): int {
        global $postId;

        include_once "../DB/DbConnect.php";
        $query = 'SELECT COUNT(com_id) FROM Comments WHERE post_id = '.$postId.';';
        $count = DB\$pdo;
        return $count($query);           //массив id НЕТ mysql_getcolumn в станд библиотеке
    }

    //return URI of the post
    public function getPostIdLink(): string {
        global $postId;
        return 'post/'.$postId.'.php';
    }
}