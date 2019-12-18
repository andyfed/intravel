<?php


use Models\PostRepository;

class galleryController
{
    use Models;
private $pageNumber; //NEEDED! use than push 'BACK' button in 'post/id' page
private $postID;
private $postRepo;

    public function recent($arg){
        if ($arg < 2)
            $this->postRepo = new PostRepository();

        if (isset($this->postRepo))
            $this->postRepo->getListOfPosts($arg);

        $this->pageNumber = $arg;
    }

    public function top($arg){
        $this->pageNumber = $arg;
    }

    public function favorites($arg){
        $this->pageNumber = $arg;
    }

    public function post($arg){
        $this->postID = $arg;
    }


}