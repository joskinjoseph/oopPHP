<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class User
{
    public static $nextId = 0;
    public $myId;

    public static function printId(){
        return "User id  is " . self::$nextId;
    }
  
}

$user = new User();
$user->myId = 10;
echo $user->myId;
echo "<hr>";

echo User::$nextId;

echo "<hr>";

echo User::printId();