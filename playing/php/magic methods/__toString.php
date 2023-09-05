<?php

class User
{

    public $name;
    public function __construct($n)
    {
        $this->name = $n;
    }

    public function say()
    {
        echo "Hello {$this->name}! <hr>";
    }

    public function __tostring()
    {
        return "You have directly printed the object of class (". __CLASS__ .")! <br>";
    }
}

$student = new User('Oluwadamilare');

$student->say();
echo $student;


//it helps to give a not whenever we echo an object of its class