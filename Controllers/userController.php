<?php


use System\View;

class userController
{
    //for page http://domain/user/enter
    public function actionEnter($arg){
        $data[0]=$arg;

        try {
            View::render("gallery", $data);
        } catch (\ErrorException $e) {
            echo 'Render \'gallery/recent\' page error: '.$e;
        }

    }

    // for page http://domain/user/cabinet/userId
    // for authorized users only
    public function actionCabinet($arg){
        // TODO: Realize method.
    }

    // for page http://domain/user/profile/userId
    // user profile - show open information about user account
    public function actionProfile($arg){
        // TODO: Realize method.
    }

}