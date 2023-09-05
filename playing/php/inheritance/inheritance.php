<?php

class Person
{
    protected $name;
    protected $age;
    protected $gender;

    protected function showPerson($n, $a, $g)
    {
        echo 'Name : ' . $this->name = $n . '<br>';
        echo 'Age : ' . $this->age = $a . '<br>';
        echo 'Gender : ' . $this->gender = $g . '<br>';
    }
}

class Employee extends Person
{
    private $salary;
    private $post;

    public function showEmployee($n, $a, $g, $s, $p)
    {
        $this->showPerson($n, $a, $g);
        echo 'Salary : ' . $this->salary = $s . '<br>';
        echo 'Post : ' . $this->post = $p . '<br>';
    }
}

$worker = new Employee();
$worker->showEmployee('Oluwadamilare', 24, 'Male', 5000, 'Web Developer');


//if its to have diffrent child class and a parent, we will have to use a public function so as to access it outside the p
