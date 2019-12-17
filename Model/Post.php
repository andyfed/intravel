<?php

/* 1 current post essence:
 * Creates once. Constant.
 */
class Post {
    private $postId;
    private $authorId;
    private $postDate;
    private $picLink;
    private $picLinkMin;
    private $postDesc;
    private $commentCount = 0;
    private $postEssence = [];

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
    public function getPostEssence(): array {
        return $this->postEssence;
    }

    //constructor
    public function __construct($postId) {
        include_once "../DB/DbConnect.php";
        $this->postId = $postId;
        global $authorId;
        global $postDate;
        global $picLink;
        global $picLinkMin;
        global $postDesc;
        global $commentCount;

        $authorId = 'SELECT user_id FROM Posts WHERE id = '.$this->postId.' LIMIT 1'; //+
        $postDate = 'SELECT date_time FROM Posts WHERE id = '.$this->postId.' LIMIT 1'; //+
        $picLink = 'SELECT pic_link FROM Posts WHERE id = '.$this->postId.' LIMIT 1'; //+
        $postDesc = 'SELECT text FROM Posts WHERE id = '.$this->postId.' LIMIT 1'; //+

        $picLinkMin = $this->getMini();
        $commentCount = $this->getCommentCount();
    }

    // метод создает ссылку на миниатюру изображения
    function createPreviewLink(): void {
        global $picLink;
        global $picLinkMin;

        $temp = explode("400", $picLink);
        $picLinkMin = "".$temp."200";
    }

    //метод возвращает ссылку на миниатюру изображения
    public function getMini(): string {
        return $this->picLinkMin;
    }

    // метод считает и возвращает количество комментов
    function getCommentCount(): int {
        global $postId;

        include_once "../DB/DbConnect.php";
        $query = 'SELECT com_id FROM Comments WHERE post_id = '.$postId; //протестить что переменная в конце учитывается!
        $commentsArray = mysql_getcolumn($query); //массив id
        return count($commentsArray);
    }

    //return URI of the post
    public function getPostIdLink(): string {
        global $postId;
        return 'post/'.$postId.'.php';
    }
}