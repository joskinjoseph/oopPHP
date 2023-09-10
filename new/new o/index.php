<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class User {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
       return $this->name;
    }

    public function setName($name) {
       $this->name = $name;
     }

    public function getAge() {
        return $this->age;
     }
 
     public function setAge($age) {
        $this->age = $age;
      }

}


$user = new User("Dary", 24);
echo $user->getName();
echo "<hr>";
echo $user->getAge();



// $user->name = "Joskin";
// $user->email = "joskin@example.com";
// echo $user->name . " " . $user->email;



// $admin = new Admin();
// $admin->name = "Man";
// $admin->email = "men@example.com";
// $admin->level = "Super Level";
// echo $admin->name . " " . $admin->email.  " " . $admin->level;
// echo "<hr>";
// echo $admin->welcomeMessage();

