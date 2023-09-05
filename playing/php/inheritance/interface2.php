<?php

interface Login
{
    const EMAIL = 'joskin@example.com';
    const PASSWORD = '12345';

    public function showEmail();
    public function showPassword();
}

interface Register extends Login
{
    const PHONE = '08149120053';
    public function showPhone();
}

class Student implements Register
{
    public function showEmail()
    {
        echo Register::EMAIL;
    }
    public function showPassword()
    {
        echo Register::PASSWORD;
    }
    public function showPhone()
    {
        echo Register::PHONE;
    }
}
$user = new Student();
$user->showEmail();
echo '<hr>';
$user->showPassword();
echo '<hr>';
$user->showPhone();
echo '<hr>';
