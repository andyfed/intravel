<?php
namespace Controllers;

use Models\PostRepository;
use System\View;

class galleryController
{

private $pageNumber; //NEEDED! use than push 'BACK' button in 'post/id' page
private $postID;
private $postRepo;
private $galleryPage; // [post id => post object]

    public function actionRecent($arg){
        global $galleryPage;
        $this->pageNumber = $arg;                       //save current page number for 'back' function from 'post' page

        if ($arg === 1)                                 //for first call creates new PostRepository - 'postRepo'
            $this->postRepo = new PostRepository();

        //if ($postRepo)                     //after call need to make sure that postRepo is exist. or don't
        $galleryPage = $this->postRepo->getListOfPosts($arg);      //then get list of posts for the page

        try {
            View::render('gallery', $this->galleryPage);
        } catch (\ErrorException $e) {
            echo 'Render gallery/recent error';
        }
    }


    // make that function on 2nd step
    public function actionPost($arg){
        $this->postID = $arg;
    }


    //make that functions later
    public function actionTop($arg){
        $this->pageNumber = $arg;
    }
    public function actionFavorites($arg){
        $this->pageNumber = $arg;
    }

}