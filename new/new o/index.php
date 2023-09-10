<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class User
{
    public $name = "Joseph";
    public $age;

    final public function printName($name){
        return "My name is " . $name;
    }

}

class Manager extends User {
    public $name = "Joskin";

    
}

$manager = new Manager();
echo $manager->printName("JOSKIN");