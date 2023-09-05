<?php

class User {
    private $name;
    private $age;

    function __construct($n,$a){
        $this->name = $n;
        $this->age = $a;
    }

    function __get($propertyName){
        if($propertyName == 'name') {
            return $this->name. '<hr>';
        } else if ($propertyName == 'age') {
            return $this->age. '<hr>';
        } else {
            return "This property ({$propertyName}) is not declared in the (".__CLASS__.") class!! <hr>";
        }
    }
}

$obj = new User('Oluwadamilare', 24);
echo $obj->name;
echo $obj->age;
echo $obj->id;