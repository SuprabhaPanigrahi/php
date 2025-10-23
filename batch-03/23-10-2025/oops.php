<?php
class Car {
    private $brand;
    private $model;
    
    function __construct($brand = "", $model = "") {
        $this->brand = $brand;
        $this->model = $model;
    }   
    // getter and setter for brand
    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    // getter and setter for model
    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }
}

// Creating an object (instance)
$myCar = new Car();
// $myCar->brand = "Toyota";
// $myCar->model = "Corolla";
$myCar->setBrand("Toyota");
$myCar->setModel("Corolla");
// echo "Brand: " . $myCar->brand . "\n"; // Output: Brand: Toyota
// echo "Model: " . $myCar->model . "\n"; // Output: Model
echo "Brand: " . $myCar->getBrand() . "\n"; // Output: Brand: Toyota
echo "Model: " . $myCar->getModel() . "\n"; // Output

$obj2 = new Car("Honda", "Civic");
echo "Brand: " . $obj2->getBrand() . "\n"; // Output: Brand: Honda
echo "Model: " . $obj2->getModel() . "\n"; // Output