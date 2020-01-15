<?php


namespace Models;


class User
{
    public $user_id;
    public $nickname;
    public $name;
    public $surname;
    public $email;      // должен быть закрытым ?
    public $password;   //должен удаляться при выдаче по View
    public $active;     // true(1) - active, false(0) - blocked
    public $role;       //reader, author, admin
    public $userpic;

    // password не нужно отдавать при запросе инфы, но нужно при авторизации
    // нужно шифровать, md-5 ?
}