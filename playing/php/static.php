<?php

class Test
{
    public $fname;
    public $lname;

    public function __construct($firstName, $lastName)
    {
        $this->fname = self::filterName($firstName);
        $this->lname = self::filterName($lastName);
    }

    static function filterName($name) {
        $name = trim ($name);
        $name = preg_replace ('/[^a-zA-Z0-9]/', ' ', $name);

        return $name;
    }
}

$user = new Test("Oluwadamilare", "Akinbomi");
echo $user->fname. ' ' .$user->lname;
                       