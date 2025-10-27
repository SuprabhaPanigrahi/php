<?php
class A{
  public $a=0;
  public static $b=0;
  
  public  function __construct(){
    $this->a++;
    self::$b++; 
  }
  //Non Static Method
  public function printCount(){
    echo "Instance Count: " . $this->a . "\n";
    echo "Static Count: " . self::$b . "\n";
  }

  //Static Method
  public static function printStaticCount(){
    echo "Instance Count: " . (new self())->a . "\n";
    echo "Static Count: " . self::$b . "\n";
  }
}

$obj1 = new A();
$obj1->printCount();
$obj2 = new A();
$obj2->printCount();
$obj3 = new A();
$obj3->printCount();
//A::printStaticCount();  