<?php
class User {
    public $name;
    public $email;

    public function welcomeMessage() {
        return "Have a good working day";
    }
}

class Admin extends User {
    public $level;
}

$user = new User();
$user->name = "Joskin";
$user->email = "joskin@example.com";
echo $user->name . " " . $user->email;



$admin = new Admin();
$admin->name = "Man";
$admin->email = "men@example.com";
$admin->level = "Super Level";
echo $admin->name . " " . $admin->email.  " " . $admin->level;
echo "<hr>";
echo $admin->welcomeMessage();

