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


    // ban user on the site. For admin only!
    private function block($userId)
    {
        /*
        if (   ) {   // проверка учетной записи пользователя - админ или нет
            $query = 'SET active = 0 WHERE user_id = :userId';
            DB::run($query, [':userId' => $userId]);
        }
        */
    }

    public function getById($userId): array
    {
        // TODO: Implement getById() method.
    }

    public function getByIds(array $userIdList)
    {
        // TODO: Implement getByIds() method.
    }

}