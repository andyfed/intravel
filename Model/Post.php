<?php

/* 1 current post essence:
 * Creates once. Constant.
 */
public class Post {
    private $postId;
    private $authorId;
    private $postDate;
    private $picLink;
    private $picLinkMin;  //нужен снаружи
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
    //доделать метод!
    public function __construct($postId) {
        $this->postId = $postId;
        global $authorId;
        global $postDate;
        global $picLink;
        global $picLinkMin;
        global $postDesc;
        global $commentCount;

        //весь следующий блок - временная заплатка для теста. Добавить запросы в БД!
        // ИСПРАВИТЬ!
        $authorId =
        $postDate =
        $picLink =
        $postDesc =

        $picLinkMin = $this->getMini();
        $commentCount = $this->getCommentCount();
    }

    // метод возвращает ссылку на миниатюру изображения
    function createPreviewLink(): void {
        global $picLink;
        global $picLinkMin;

        $temp = explode("400", $picLink);
        $picLinkMin = "".$temp."200";
    }

    public function getMini(): string {
        return $this->picLinkMin;
    }

    //метод считает и возвращает количество комментов
    // ИСПРАВИТЬ!
    function getCommentCount(): int {
        global $postId;


        //дописать метод с запросом
        //когда будет соединение с БД
        return ; //исправить возвращаемое знаечение когда метод будет готов
    }

    //return URI of the post
    // ИСПРАВИТЬ!
    public function getPostIdLink(): string {
        global $postId;
        return 'post#'.$postId.'php';
    }
}