<?php

namespace Controllers;
use System\View;
use Models\UserRepository;

class userController
{
    // LOGIN / REGISTER
    //for page http://domain/user/enter/
    public function actionEnter($arg){
        $data[0]=$arg;

        try {
            View::render("enter", $data);
        } catch (\ErrorException $e) {
            require_once '../Views/404.php';
            echo 'Render \'user/enter\' page error: '.$e;
        }
    }

    // LOGOUT
    // exit authenticated account
    public function actionExit($arg)
    {
        if ($arg==1){
            session_destroy();
        }
        header("Location: http://test.com/");
        //require "../index.php";  // redirect on index.php
        //exit;
    }

    // Registration of new user account
    public function actionRegistration(){
        $regData = $_POST;  // !! htmlspecialchar нужен??


        //check for existing registered email
        $repo = new UserRepository();
        $a = $repo->checkEmailExistance($regData['email']);

        if (!$a)  {     //if email doesn't exist in DB
            $repo->add($regData);
        }
    }


    // login check
    public function actionAuthorize(){

        $loginInput = $_POST['email'];
        $passwordInput = $_POST['pass'];
        $user = (new UserRepository())->getByEmail($loginInput);

        if (($user->email===$loginInput) && ($user->password===$passwordInput) && ($user->active==='1')) {
            $_SESSION['AUTH'] = 1;
            $_SESSION['nickname'] = $user->nickname;
            $_SESSION['userpic'] = $user->userpic;
            $_SESSION['userid'] = $user->user_id;
            $_SESSION['email'] = $user->email;
            $_SESSION['name'] = $user->name;
            $_SESSION['surname'] = $user->surname;
            $_SESSION['role'] = $user->role;
            try {
                View::render('cabinet', (array)$user);
            } catch (\ErrorException $e) {
                require_once '../Views/404.php';
                echo 'Authentication success.<br>';
                echo 'Render \'user/enter\' page error: '.$e;
            }

        } else      // Login error, return to 'enter.php'
            $this->actionEnter(1);
    }

    // for page http://domain/user/cabinet/userId
    // for authorized users only - PERSONAL CABINET
    public function actionCabinet($arg){
        $user = $_SESSION;
        try {
            View::render('cabinet', (array)$user);
        } catch (\ErrorException $e) {
            require_once '../Views/404.php';
            echo 'Authentication success.<br>';
            echo 'Render \'user/enter\' page error: '.$e;
        }
        // TODO: Realize method.
    }

    // for page http://domain/user/profile/userId
    // user profile - show open information about user account
    public function actionProfile($arg){
        // TODO: Realize method.
    }

}