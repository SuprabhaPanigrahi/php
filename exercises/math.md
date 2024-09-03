### 1. Write a PHP  script to find the maximum and minimum marks from the following set of arrays.

```php
<?php
// Define arrays of marks for three subjects
$marks1 = array(360,310,310,330,313,375,456,111,256); 
$marks2 = array(350,340,356,330,321); 
$marks3 = array(630,340,570,635,434,255,298); 

// Find the maximum marks among all subjects
$max_marks = max(max($marks1), max($marks2), max($marks3)); 

// Find the minimum marks among all subjects
$min_marks = min(min($marks1), min($marks2), min($marks3)); 

// Output the maximum and minimum marks
echo "Maximum marks : ".$max_marks."\n";
echo "Minimum marks : ".$min_marks."\n";
?>
```

### 2. Write a PHP script which rounds the following values with 1 decimal digit precision.

```php
<?php
echo round( 1.65, 1, PHP_ROUND_HALF_UP)."\n";   // Rounds up to nearest even number: 1.7
echo round( 1.65, 1, PHP_ROUND_HALF_DOWN)."\n"; // Rounds down to nearest even number: 1.6
echo round(-1.54, 1, PHP_ROUND_HALF_EVEN)."\n"; // Rounds to nearest even number: -1.5
?>
```

### 3. Write a PHP script to generate random 11 characters string of letters and numbers.

```php
<?php
$x = rand(10e12, 10e16); // Generate a random number between 10^12 and 10^16
echo base_convert($x, 10, 36)."\n"; // Convert the random number to base-36 and echo it
?>
```

### 4. Write a PHP script to convert scientific notation to an int and a float.

```php
<?php
$val = '4.5e3'; // Assign a string containing a number in scientific notation ('4.5e3') to the variable $val
$ival = (int) $val; // Convert the string $val to an integer and store it in $ival
$fval = (float) $val; // Convert the string $val to a float and store it in $fval
echo $ival."\n"; // Output the integer value stored in $ival followed by a newline character ("\n")
echo $fval."\n"; // Output the float value stored in $fval followed by a newline character ("\n")
?>
```

### 5. Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.
```php
<?php
$odate = "2012-09-12"; // Assign a date string "2012-09-12" to the variable $odate
$newDate = date("d-m-Y", strtotime($odate)); // Convert the date string $odate to a new date format "d-m-Y" using strtotime() and store it in $newDate
echo $newDate."\n"; // Output the new date stored in $newDate followed by a newline character ("\n")
?>
```
### 6. Write a PHP script to get the information regarding memory usage in KB or MB etc.

```php
<?php
$memory_size = memory_get_usage(); // Get the memory usage of the script and store it in $memory_size
$memory_unit = array('Bytes','KB','MB','GB','TB','PB'); // Define an array containing memory size units

// Display memory size into kb, mb etc.
echo 'Used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).' '.$memory_unit[$x]."\n";
?>
```

### 7. Write a PHP script to find earliest and latest dates from a list of dates.

```php
<?php
$dates = array('2015-02-01', '2015-02-02', '2015-02-03'); // Define an array of dates

// Print the latest date from the array
echo "Latest Date: " . max($dates) . "\n";

// Print the earliest date from the array
echo "Earliest Date: " . min($dates) . "\n";
?>
```

### 8. Write a PHP function to round a float away from zero to a specified number of decimal places.
```php

<?php
function roundout($value, $places = 0) {
    if ($places < 0) { 
        $places = 0; // Ensure places is non-negative
    }
    $x = pow(10, $places); // Calculate the multiplier
    // Round the value based on its sign and the multiplier, then divide by the multiplier
    return ($value >= 0 ? ceil($value * $x) : floor($value * $x)) / $x;
}

// Test the roundout function with different values and precision
echo roundout(78.78001, 2) . "\n";     
echo roundout(8.131001, 2) . "\n";     
echo roundout(0.586001, 4) . "\n";   
echo roundout(-0.125481, 3) . "\n";  
echo roundout(-0.125481);      
?>
```

### 9. Write a PHP function to convert Arabic Numbers to Roman Numerals.

```php
<?php
function arabic_rome($num)
{
    $c = 'IVXLCDM'; // Roman numeral characters
    for ($x = 5, $y = $result = ''; $num; $y++, $x ^= 7) { // Loop until $num is not zero
        $o = $num % $x; // Remainder of $num divided by $x
        $num = $num / $x ^ 0; // Integer division of $num by $x
        // Loop to append the corresponding Roman numeral characters to $result
        for (; $o--; $result = $c[$o > 2 ? $y + $num - ($num = -2) + $o = 1 : $y] . $result);
    }
    return $result; // Return the Roman numeral representation of the input number
}
print_r(arabic_rome(101) . "\n"); // Test the function with input 101
?>
```

### 10. Write a PHP function to get random float numbers.

```php
<?php
function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
{
    // Check if the start number is greater than the end number
    if ($st_num > $end_num) {
        return false; // Return false if start number is greater than end number
    }
    // Generate a random integer between the multiplied start and end numbers,
    // then divide it by the multiplication factor to get a random float value
    return mt_rand($st_num * $mul, $end_num * $mul) / $mul;
}

// Test the rand_float function with different arguments and print the results
echo rand_float() . "\n"; // Random float between 0 and 1
echo rand_float(0.6) . "\n"; // Random float between 0.6 and 1
echo rand_float(0.5, 0.6) . "\n"; // Random float between 0.5 and 0.6
echo rand_float(0, 20) . "\n"; // Random float between 0 and 20
echo rand_float(0, 3, 2) . "\n"; // Random float between 0 and 3  
echo rand_float(0, 2, 20) . "\n"; // Random float between 0 and 2
?>
```
### 11. Write a PHP function to create a human-readable random string for a captcha.

```php
<?php
// Define a function named random_string with a default length of 5
function random_string($length = 5)
{ 
    // Define a string of characters without vowels and 'x'
    $chars = 'bcdfghjklmnpqrstvwxyz';

    // Initialize an empty string to store the result
    $result = '';

    // Iterate through the specified length to generate random characters
    for ($x = 0; $x < $length; $x++)
    {
        // Alternate between consonants and vowels while generating characters
        $result .= ($x % 2) ? $chars[mt_rand(13, 21)] : $chars[mt_rand(0, 12)];
    }

    // Return the generated random string
    return $result;
}

// Call the random_string function and echo the result
echo random_string();
?>
```

### 12. Write a PHP function to get the distance between two points on the earth.

```php
<?php
// Define a function to calculate the distance between two points given their latitude and longitude
function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){ 
    // Define the value of pi
    $pi = pi(); 

    // Calculate the angular distance between the two points using Haversine formula
    $x = sin($latitudeFrom * $pi/180) * 
         sin($latitudeTo * $pi/180) + 
         cos($latitudeFrom * $pi/180) * 
         cos($latitudeTo * $pi/180) * 
         cos(($longitudeTo * $pi/180) - ($longitudeFrom * $pi/180)); 

    // Calculate the arc tangent
    $x = atan((sqrt(1 - pow($x, 2))) / $x); 

    // Convert the angular distance to kilometers and then to miles
    return abs((1.852 * 60.0 * (($x/$pi) * 180)) / 1.609344); 
} 

// Calculate the distance from New York to London and echo the result
echo lat_long_dist_of_two_points(40.7127, 74.0059, 51.5072, 0.1275).' mi'."\n"; 
?>
```
