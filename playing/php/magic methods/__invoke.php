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

    public function __invoke()
    {
        echo "You have called the object as function";
    }
}

$student = new User('Oluwadamilare');

$student->say();
$student();



// it helps to give a note which pops up whenever we call an object as a function/method of its class