<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return "Name: " . $this->name . "<br> Age: " . $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName(){
        echo $this->name;
    }

    public function setAge($age) {
        $this->name = $age;
    }

    public function getAge(){
        echo $this->age;
    }

}

$user = new User("Joskin", 25);
echo $user;