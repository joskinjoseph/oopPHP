<?php

abstract class Person
{
    protected $name;
    protected $age;

    public function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    public function hello()
    {
        echo 'This is an abstract <hr>';
    }

    abstract public function showData();
    abstract public function add($x, $y);
}

class User extends Person
{
    public function showData()
    {
        echo 'This is ' . $this->name . ' and I am ' . $this->age . '  years old. <hr>';
    }

    public function add($x, $y){
        return $x + $y;
    }
}

$obj = new User('AKINBOMI OLUWADAMILARE', 24);
$obj->showData();
$obj->hello();
echo 'Sum: ' .$obj->add(4,3);
