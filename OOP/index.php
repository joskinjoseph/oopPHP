<?php

// class Fruit {

//     //Properties
//     public $name;
//     public $color;

//     //Methods
//     function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//     }

//     function get_name() {
//         return $this->name;
//     }
//     function get_color() {
//         return $this->color;
//     }
// }

// // $apple = new Fruit();
// // $banana = new Fruit();

// // $apple->set_name('Apple');
// // $apple->set_color('Red');

// // $banana->set_name('Banana');
// // $banana->set_color('Green');

// // echo "Name: " . $apple->get_name();
// // echo "<br>";
// // echo "Color: " . $apple->get_color();
// // echo "<br>";
// // echo "Name: " .  $banana->get_name();
// // echo "<br>";
// // echo "Color: " .  $banana->get_color();



// $apple = new Fruit("Apple", "Green");
// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();


class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  $apple = new Fruit("Apple", "red");