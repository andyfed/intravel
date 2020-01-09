<?php


namespace Models;


class User
{
    public $id;
    public $nickname;
    public $name;
    public $surname;
    public $email;  // должен быть закрытым ?
    public $role;   //reader, author, admin
    public $status; // true(1) - active, false(0) - blocked

    // password не нужно отдавать при запросе инфы, но нужно при авторизации
    // нужно шифровать, md-5 ?
}