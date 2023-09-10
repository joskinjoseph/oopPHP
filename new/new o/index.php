<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class User
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
      if (property_exists($this, $property)){
        $this->$property = $value;
      }
      return $this;
     }

   
}

$user = new User("Dary", 24);
$user->__set('name', 'David');
echo $user->__get('name');
echo "<hr>";
