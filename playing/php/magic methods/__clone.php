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

    public function __clone()
    {
        echo "You have clone the object <hr>";
    }
}

$student = new User('Oluwadamilare');
echo $student->name. '<hr>';
$student2 = clone $student;
echo $student2->name. '<hr>';