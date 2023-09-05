<?php

class Students {
    public function __construct() {
        echo 'This is a constructor';
    }

    public function greetings() {
        echo 'Hello World!!!';
    }

    public function __call($functionName, $argument){
        echo "The function ({$functionName}) you called does not exit in this (".__CLASS__.") class <br>";
        print_r($argument);
        echo "<br>";
        echo "Is interesting (".__CLASS__.")b 6tdc";
    
    }
}

$student = new Students();
echo '<hr>';
$student->greetings();
echo '<hr>';
$student->mog(23,23,45,65,34,76,86,46);
