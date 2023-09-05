<?php

final class Workers
{
     public function salary()
    {
        echo 'My salary is too small';
    }
}

class Manager extends Workers
{
    public function salary()
    {
        echo 'My salary is too small';
    }
}

$obj = new Workers();
$ob = new Manager();

$obj->salary();
echo '<hr>';
$ob->salary();

//erasing the FINAL will make this code work because final disqualifies it from extending into another class

//it can also be used with a method to disqualify the method from being used outside the class