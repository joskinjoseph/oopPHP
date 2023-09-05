<?php

interface Test
{
    const Grade1 = 59;

    public function showValue();
}

interface Test2 extends Test
{
    const Grade2 = 70;

}

class User
{
    private $name;

    public function showName($n)
    {
        echo 'Name: ' .$this->name = $n;
    }
}

class Students extends User implements Test2
{
    public function showValue()
    {
        echo Test2::Grade1;
    }
}

$student = new Students();
$student->showValue();
echo '<hr>';
$student->showName('JOSKIN');