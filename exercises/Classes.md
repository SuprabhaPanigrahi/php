### 1. Write a simple PHP class which displays the following string.

```php
<?php
class MyClass {
// Define a class named MyClass
class MyClass {
    // Define a constructor method
    public function __construct() 
    {
        // Output a message indicating that the class has been initialized
        echo 'MyClass class has initialized !'."\n";
    }
}

// Create an instance of the MyClass class
$userclass = new MyClass;
?>
```


### 2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.

```php
<?php
// Define a class named user_message
class user_message {
    // Define a public property named $message and initialize it with a default value
    public $message = 'Hello All, I am ';

    // Define a method named introduce which accepts a parameter $name
    public function introduce($name)
    {
        // Concatenate the message with the provided name and return the result
        return $this->message.$name;
    }
}

// Create an instance of the user_message class
$mymessage = new user_message();

// Call the introduce method of the $mymessage object and output the result
echo $mymessage->introduce('Scott')."\n";
?>
```

### 3. Write a PHP class that calculates the factorial of an integer.

```php
<?php
// Define a class named factorial_of_a_number
class factorial_of_a_number
{
    // Declare a protected property named $_n
    protected $_n;

    // Define the constructor method which accepts a parameter $n
    public function __construct($n)
    {
        // Check if the parameter $n is not an integer
        if (!is_int($n)) {
            // Throw an exception if $n is not an integer
            throw new InvalidArgumentException('Not a number or missing argument');
        }
        // Assign the value of $n to the protected property $_n
        $this->_n = $n;
    }

    // Define a method named result to calculate the factorial of the number
    public function result()
    {
        // Initialize the factorial variable to 1
        $factorial = 1;
        // Iterate from 1 to the value of $_n
        for ($i = 1; $i <= $this->_n; $i++) {
            // Multiply the factorial by the current value of $i
            $factorial *= $i;
        }
        // Return the calculated factorial
        return $factorial;
    }
}

// Create an instance of the factorial_of_a_number class with the argument 5
$newfactorial = new factorial_of_a_number(5);

// Call the result method of the $newfactorial object and output the result
echo $newfactorial->result();
?>
```

### 4. Write a PHP class that sorts an ordered integer array with the help of sort() function.

```php
<?php
// Define a class named array_sort
class array_sort
{
    // Declare a protected property named $_asort to store the array
    protected $_asort;
    
    // Define the constructor method which accepts an array $asort
    public function __construct(array $asort)
    {
        // Assign the provided array to the protected property $_asort
        $this->_asort = $asort;
    }
    
    // Define a method named alhsort to sort the array in ascending order
    public function alhsort()
    {
        // Create a copy of the original array
        $sorted = $this->_asort;
        // Sort the copied array in ascending order
        sort($sorted);
        // Return the sorted array
        return $sorted;
    }
}

// Create an instance of the array_sort class with an array argument
$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));

// Call the alhsort method of the $sortarray object and print the sorted array
print_r($sortarray->alhsort())."\n";
?>
```

### 5. Calculate the difference between two dates using PHP OOP approach.

```php
<?php
// Create a new DateTime object representing the start date "1981-11-03"
$sdate = new DateTime("1981-11-03");

// Create a new DateTime object representing the end date "2013-09-04"
$edate = new DateTime("2013-09-04");

// Calculate the interval between the two dates
$interval = $sdate->diff($edate);

// Output the difference between the dates in years, months, and days
echo "Difference : " . $interval->y . " years, " . $interval->m . " months, " . $interval->d . " days ";
?>
```

### 6. Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

```php
<?php
// Define a class named MyCalculator
class MyCalculator {
    // Private properties to hold the first and second values
    private $_fval, $_sval;
    
    // Constructor to initialize the object with two values
    public function __construct($fval, $sval) {
        $this->_fval = $fval; // Assign the first value to the property _fval
        $this->_sval = $sval; // Assign the second value to the property _sval
    }
    
    // Method to add the two values
    public function add() {
        return $this->_fval + $this->_sval; // Return the sum of _fval and _sval
    }
    
    // Method to subtract the second value from the first value
    public function subtract() {
        return $this->_fval - $this->_sval; // Return the difference of _fval and _sval
    }
    
    // Method to multiply the two values
    public function multiply() {
        return $this->_fval * $this->_sval; // Return the product of _fval and _sval
    }
    
    // Method to divide the first value by the second value
    public function divide() {
        return $this->_fval / $this->_sval; // Return the quotient of _fval and _sval
    }
}

// Create an instance of the MyCalculator class with initial values 12 and 6
$mycalc = new MyCalculator(12, 6); 

// Output the result of addition
echo $mycalc->add() . "\n"; // Displays 18 

// Output the result of multiplication
echo $mycalc->multiply() . "\n"; // Displays 72

// Output the result of subtraction
echo $mycalc->subtract() . "\n"; // Displays 6

// Output the result of division
echo $mycalc->divide() . "\n"; // Displays 2
?>
```

### 7. Write a PHP  script to convert a string to Date and DateTime.

```php
<?php
// Create a DateTime object from the given date string '12-08-2004' using the format 'm-d-Y'
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');

// Output the formatted date in 'Y-m-d' format
echo $dt;
?>
```










