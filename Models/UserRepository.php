<?php


namespace Models;


use DB\DB;

class UserRepository implements Repository
{
    public function add($userId)
    {
        // TODO: Implement add() method.
    }

    public function update($userId)
    {
        // TODO: Implement update() method.
    }

    public function delete($userId)
    {
        // TODO: Implement delete() method.
    }

    // return object User
    public function getById($userId)
    {
        $query = 'SELECT * FROM Users WHERE user_id = :userId';
        $user = DB::run($query, [':userId'=>intval($userId)])->fetchObject("User");
        if ($user!=null) {
            $user->password = null;
            return $user;
        } else
            echo 'No such user as #id: '.$userId.' !';
    }

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

    public function getByIds(array $userIdList)
    {
        // TODO: Implement getByIds() method.
    }

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
}