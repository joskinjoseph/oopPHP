<?php

class User
{
    private $name;
    private $age;

   

    public function __set($propertyName, $propertyValue)
    {
        if ($propertyName == 'name') {
            $this->name = $propertyValue;
        } else if ($propertyName == 'age') {
            $this->age = $propertyValue;
        } else {
            echo "This property ({$propertyName}) is not declared in the (" . __CLASS__ . ") class!! <hr>";
        }
    }

    public function showData()
    {
        echo 'Name: ' .$this->name. '<br> Age: ' .$this->age. '<br>';
    }
}

$obj = new User();
$obj->name ='Oluwadamilare';
$obj->age =34;

$obj->showData();
$obj->id = 22;
