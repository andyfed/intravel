<?php


namespace Models;


use Controllers\userController;
use DB\DB;

class UserRepository implements Repository
{
    // for registration new user
    public function add(array $data) // данные из глобального массива _POST
    {
        $query = 'INSERT INTO Users (nickname, name, surname, email, password)
VALUES (:nickname, :name, :surname, :email, :password)';
        DB::run($query, [":nickname"=> $data['nickname'], ":name"=>$data['name'], ":surname"=>$data['surname'], ":email"=>$data['email'], ":password"=>$data['password']]);

    }

    // change existed user
    public function update($userId)
    {
        // включить проверку типа учетной записи
        // TODO: Implement update() method.
    }

    // for enter to user account
    public function enter()
    {
        //получаем из _POST
        // проверка на совпадение login / pass
        $_POST[''];
    }


    // return object User
    public function getById($userId)
    {
        $query = 'SELECT * FROM Users WHERE user_id = :userId';
        $user = DB::run($query, [':userId'=>intval($userId)])->fetchObject("Models\User");
        if ($user!=null) {
            $a = new picHandler();
            $user->userpic = $a->getUserpic($userId);
            $user->password = null;     // delete password in public object
            $user->email = null;        // delete email in public object
            return $user;
        } else
            echo 'No such user as #id: '.$userId.' !';
    }

    public function checkEmailExistance($email): bool { // возможно нужно возвращаемое значени int

        $query = 'SELECT COUNT(email) FROM Users WHERE email = :email';
        $answer = DB::run($query, [':email'=>intval($email)]);
        return (bool)$answer;
    }

    //unused method! for delete?
    public static function getFace($userId): array
    {
        $query1 = 'SELECT nickname FROM Users WHERE user_id = :userId';

        $nickname = DB::run($query1, [':userId'=>intval($userId)])->fetchAll(); //array 2-dim
        $nickname = $nickname[0]; //array assoc
        $nickname = $nickname['nickname'];  //string
        $userpic = new picHandler();
        $userpic = $userpic->getUserpic($userId);
        $face = array('nickname'=>$nickname, 'userpic'=>$userpic);

        return $face;
    }

    public function getByIds(array $userIdList): array
    {
        // TODO: Implement getByIds() method.
    }

    // for authorization
    public function getByEmail(string $email)
    {
        $query = 'SELECT * FROM Users WHERE email = :email';
        $user = DB::run($query, [':email'=>$email])->fetchObject("Models\User");
        if (isset($user->user_id)) {
            $user->userpic = (new picHandler())->getUserpic($user->user_id);
            return $user;
        } else{
            (new userController())->actionEnter(1);     // load 'enter' page with error message
        }

    }


    //// ADMIN SECTION ////

    // дописать во все методы секции проверку на тип учетной записи

    // ban user on the site. For admin only!
    private function block($userId)
    {
        // TODO: Implement block() method.
        /*
        if (   ) {   // проверка учетной записи пользователя - админ или нет
            $query = 'SET active = 0 WHERE user_id = :userId';
            DB::run($query, [':userId' => $userId]);
        }
        */
    }

    // delete user (wrong account) from database. For admin only!
    public function delete($userId)
    {
        // TODO: Implement delete() method.
    }
}