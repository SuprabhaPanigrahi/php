<?php
declare(strict_types=1);
/*
    Functions in PHP :
    A function is a block of code that can be reused multiple times throughout a program.
    Functions help to organize code, improve readability, and promote code reusability.

    Here is a simple example of a function in PHP:
*/
    function say_hello() {
        echo "Hello, World!";
    }

    say_hello(); // Calling the function

    //Default Value$ag

    function greet($name="Guest",$age=80) {
        echo "Hello, " . $name . "!";
    }
    greet("Alice"); 
    echo "\n";
    greet();

    function add($a=0, $b=0) {
        
        return $a + $b;
    }
    $result = add(5, 10);
    echo "The sum is: " . $result;
    $result = add();
    echo "\nThe sum is: " . $result;
    $result = add(7);
    echo "\nThe sum is: " . $result;


    //Call By Reference
    function increment(&$value) {
        $value++;
        
        
    }
    $num =5;
    increment(9);
    echo "\nThe incremented value is: " . $num; 

    function power(int $base,int $exponent = 2):int {
        return pow($base, $exponent);
    }
    //Varibale Scope
   $y = 20; //global scope
   functin test(){
        $x=10; //local scope
        echo $x;
        echo $y; // This will cause an error because $y is not defined in the local scope
        $y++;
        $x++;
    }
   echo $y; // Accessing global variable
  //echo $x; // This will cause an error because $x is not defined in the global scope
   $y++;
   test();
   echo $y;
   test();
  ?>
