<?php
require "../db.php";
//define('AAA',1);
//echo AAA;
//echo __DIR__;
//echo __FILE__;
class User extends DB {
    const AAA = 1;
    public $table;
    public function __construct()
    {
        $this->table = 'users';
    }
}

$user_1 = new User();
$user = $user_1->find(54);

var_dump($user_1);