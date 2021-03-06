<?php


namespace Controllers;
use Models\galleryPage;
use Models\PostRepository;
use Models\UserRepository;
use System\View;

class galleryController
{
    // for http://domain/gallery/recent(pageNumber) or http://domain/
    public function actionRecent($arg){
        $galleryPage = new galleryPage($arg);
        $galleryPage = $galleryPage->getPage();
        try {
            View::render("gallery", $galleryPage);
        } catch (\ErrorException $e) {
            echo 'Render \'gallery/recent\' page error: '.$e;
        }
    }

    //for http://domain/gallery/post/postId
    public function actionPost($arg){
        $post = new PostRepository();
        $post = $post->getById($arg);       //new object post
        $user = new UserRepository();
        $user = $user->getById($post->user_id);
        $posts[0] = $post;
        $posts[1] = $user;

        try {
            View::render('post', $posts);
        } catch (\ErrorException $e) {
            echo 'Render \'gallery/post\' page error: ' . $e;
        }

    }



    //
    //
    public function actionTop($arg){
        $this->pageNumber = $arg;
        //TODO: make that functions later
    }
    public function actionFavorites($arg){
        $this->pageNumber = $arg;
        //TODO: make that functions later
    }
}