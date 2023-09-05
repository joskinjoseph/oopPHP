<?php

abstract class Shape
{
    
    abstract public function calculateArea();
}


class Circle extends Shape
{
    private $radius;

    public function __construct($r) {
        $this->radius = $r;
    }
    public function calculateArea()
    {
        echo 'Area of the circle =  ' .pi()*$this->radius*$this->radius. '<br>';
    }
}

class Rectangle extends Shape
{
    private $height;
    private $width;

    public function __construct($h, $w) {
        $this->height = $h;
        $this->width = $w;
    }
    public function calculateArea()
    {
        echo 'Area of the rectangle =  ' .$this->height*$this->width. '<br>';
    }
}

class Triangle extends Shape
{
    private $height;
    private $base;

    public function __construct($h, $b) {
        $this->height = $h;
        $this->base = $b;
    }
    public function calculateArea()
    {
        echo 'Area of the Triangle =  ' .($this->height*$this->base)/2;
    }
}


$cir = new Circle(5);
$rec = new Rectangle(23,2);
$tri = new Triangle(34, 23);
$cir->calculateArea();
echo '<hr>';
$rec->calculateArea();
echo '<hr>';
$tri->calculateArea();



////we can use interface here as well
// just change the abstact to interface and implements instead of extend!!!