<?php
namespace Models;

class Post
{
    public $postId;         // post id
    public $authorId;       // post author user id
    public $postDate;       // post create time in sec (UNIX time)
    public $picLink;        // picture for post page
    public $picLinkMin;     // picture miniature for gallery
    public $postDesc;       // post author description
    public $commentCount;   // post page reader's comments

}