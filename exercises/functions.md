### 1. Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.

```php
<?php
// Function to calculate the factorial of a number
function factorial_of_a_number($n)
{
    // Base case: if n is 0, return 1 (factorial of 0 is 1)
    if ($n == 0)
    {
        return 1;
    }
    else
    {
        // Recursive call: calculate factorial by multiplying n with factorial of (n-1)
        return $n * factorial_of_a_number($n - 1);
    }
}

// Call the function and print the result
print_r(factorial_of_a_number(4) . "\n");
?>
```

### 2. Write a function to check whether a number is prime or not.

```php
<?php
// Function to check if a number is prime
function IsPrime($n)
{
    // Loop through all numbers from 2 to n-1
    for ($x = 2; $x < $n; $x++)
    {
        // If n is divisible by any number other than 1 and itself,
        // it's not prime, so return 0
        if ($n % $x == 0)
        {
            return 0;
        }
    }
    // If no divisor found, n is prime, so return 1
    return 1;
}

// Call the IsPrime function to check if 3 is prime
$a = IsPrime(3);

// Check the return value and print the result
if ($a == 0)
    echo 'This is not a Prime Number.....' . "\n";
else
    echo 'This is a Prime Number..' . "\n";
?>
```

### 3. Write a function to reverse a string.

```php
<?php
// Function to reverse a string recursively
function reverse_string($str1)
{
    // Get the length of the string
    $n = strlen($str1);
    
    // Base case: if the string has only one character, return the string itself
    if ($n == 1)
    {
        return $str1;
    }
    else
    {
        // Decrement the length of the string
        $n--;
        
        // Recursively reverse the substring starting from the second character
        // and concatenate the first character to it
        return reverse_string(substr($str1, 1, $n)) . substr($str1, 0, 1);
    }
}

// Call the reverse_string function with the argument '1234' and print the result
print_r(reverse_string('1234') . "\n");
?>
```

### 4. Write a function to sort an array.

```php
<?php
// Function to sort an array in ascending order
function array_sort($a)
{
    // Iterate through each element of the array
    for ($x = 0; $x < count($a); ++$x)
    {
        // Assume the current element is the minimum
        $min = $x;

        // Iterate through the remaining elements of the array
        for ($y = $x + 1; $y < count($a); ++$y)
        {
            // If a smaller element is found, update the minimum index
            if ($a[$y] < $a[$min])
            {
                $temp = $a[$min];
                $a[$min] = $a[$y];
                $a[$y] = $temp;
            }
        }
    }

    // Return the sorted array
    return $a;
}

// Input array
$a = array(51, 14, 1, 21, 'hj');

// Call the array_sort function with the input array and print the sorted array
print_r(array_sort($a));
?>
```

### 5. Write a PHP function that checks whether a string is all lowercase.

```php
<?php
// Define a function to check if a string is all lowercase
function is_str_lowercase($str1)
   {
    // Iterate through each character in the string
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      // Check if the character's ASCII value is within the uppercase range
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false; // If any uppercase character is found, return false
         }
         }
      return true; // If no uppercase characters are found, return true
       }
// Test the function with sample strings and display the results
var_dump(is_str_lowercase('abc def ghi')); // Output: bool(true) (all lowercase)
var_dump(is_str_lowercase('abc dEf ghi')); // Output: bool(false) (uppercase 'E' found)
?>
```

### 6. Write a PHP function that checks whether a passed string is a palindrome or not?

```php
<?php
// Define a function to check if a string is a palindrome
function check_palindrome($string) 
{
    // Check if the reversed string is equal to the original string
    if ($string == strrev($string))
        return 1; // Return 1 if it is a palindrome
    else
        return 0; // Return 0 if it is not a palindrome
}
// Test the function with the string 'madam' and display the result
echo check_palindrome('madam')."\n"; // Output: 1 (true) since 'madam' is a palindrome
?>
```







