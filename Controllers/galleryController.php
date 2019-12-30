<?php
namespace Controllers;

use Models\Post;
use Models\PostRepository;
use System\View;

class galleryController
{

private $pageNumber; //NEEDED! use than push 'BACK' button in 'post/id' page
private $postID;
private Repository $postRepo;
private $galleryPage; // [post id => post object]
private $post;

    // gallery/recent/page
    public function actionRecent($arg){
        $this->pageNumber = intval($arg);                       //save current page number for 'back' function from 'post' page

        //if (intval($arg) === 1)                                 //for first call creates new PostRepository - 'postRepo'
             $this->postRepo = new PostRepository();

        //if ($postRepo)                     //after call need to make sure that postRepo is exist. or don't
        $this->galleryPage = $this->postRepo->getListOfPosts(intval($arg));      //then get list of posts for the page

        try {
            View::render('gallery', $this->galleryPage);
        } catch (\ErrorException $e) {
            echo 'Render \'gallery/recent\' page error';
        }
    }


    // gallery/post/id
    public function actionPost($arg){
        $this->postID = $arg;
        $post = new Post($arg);
        $post = $post->getPost(); // associative array of Post variables

        try {
        View::render('post', $post);
        } catch (\ErrorException $e) {
            echo 'Render \'gallery/post\' page error';
        }
    }

    //
    //make that functions later
    public function actionTop($arg){
        $this->pageNumber = $arg;
    }
    public function actionFavorites($arg){
        $this->pageNumber = $arg;
    }

}