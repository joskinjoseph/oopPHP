<?php
class User {
    public $name;

    public function sayHello() {
        return $this->name. " says Hello";
    }
}

$user = new User();
$user->name = "Joskin";
echo $user->name;
echo "<hr>";
echo $user->sayHello();



