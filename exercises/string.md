### 1. Write a PHP script to : -
  
        a) transform a string all uppercase letters.<br>
        b) transform a string all lowercase letters.<br>
        c) make a string's first character uppercase.<br>
        d) make a string's first character of all the words uppercase.<br>

```php
<?php
// Convert all characters to uppercase
print(strtoupper("the quick brown fox jumps over the lazy dog."))."\n";
// Convert all characters to lowercase
print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n";
// Make the first character uppercase
print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n";
// Make the first character of each word uppercase
print(ucwords("the quick brown fox jumps over the lazy dog."))."\n";
?>
```
### 2. Write a PHP script to split the following string.

```php
<?php
// Original string
$str1= '082307'; 
// Chunk the string into parts of 2 characters each and insert ':' between them
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>
```

### 3. Write a PHP script to check whether a string contains a specific string?

```php
<?php
// Define the input string
$str1 = 'The quick brown fox jumps over the lazy dog.';
// Check if the word "jumps" is present in the string
if (strpos($str1,'jumps') !== false) 
{
    // If present, echo a message indicating its presence
    echo 'The specific word is present.';
} 
else 
{
    // If not present, echo a message indicating its absence
    echo 'The specific word is not present.';
}
?>
```

### 4. Write a PHP script to convert the value of a PHP variable to string.

```php
<?php
$x =  20;            // Assigns the integer value 20 to the variable $x
$str1 = (string)$x;  // Converts the integer $x to a string and assigns it to $str1
// Check whether $x and $str1 are equal or not
if ($x === $str1)    // Compares $x and $str1 for both value and type
{
  echo "They are the same"."\n"; // Prints if $x and $str1 are identical
}
else
{
  echo "They are not same"."\n"; // Prints if $x and $str1 are not identical
}
?>
```

### 5. Write a PHP script to extract the file name from the following string.

```php
<?php
$path = 'www.example.com/public_html/index.php'; // Assigns a string containing a file path to the variable $path
$file_name = substr(strrchr($path, "/"), 1);     // Finds the last occurrence of '/' in $path and extracts the substring after it
echo $file_name."\n";                            // Outputs the extracted file name "index.php"
?>
```

### 6. Write a PHP script to extract the user name from the following email ID.

```php
<?php
$mailid  = 'rayy@example.com';     // Assigns an email address to the variable $mailid
$user = strstr($mailid, '@', true); // Finds the first occurrence of '@' in $mailid and returns the substring before it
echo $user."\n";                    // Outputs the substring before the '@' character in the email address
?>
```

### 7. Write a PHP script to get the last three characters of a string.

```php
<?php
$str1 = 'rayy@example.com';   // Assigns an email address to the variable $str1
echo substr($str1, -3)."\n";  // Extracts the last 3 characters from $str1 and echoes them
?>
```

### 8. Write a PHP script to format values in currency style.

```php
<?php
$value1 = 65.45;    // Assigns the value 65.45 to the variable $value1
$value2 = 104.35;   // Assigns the value 104.35 to the variable $value2
// Uses sprintf() function to format the sum of $value1 and $value2 with two decimal places
// %1.2f specifies the format: 1 total width, 2 decimal places
echo sprintf("%1.2f", $value1+$value2)."\n";  // Echoes the formatted sum to the output followed by a newline.
?>
```

### 9. Write a PHP script to generate simple random password [do not use rand() function] from a given string.

```php
<?php
// Define a function named password_generate that takes the number of characters as input
function password_generate($chars) 
{
  // Define a string containing all possible characters for the password
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  // Shuffle the characters in the string and extract a substring of length $chars
  return substr(str_shuffle($data), 0, $chars);
}
// Call the password_generate function with 7 characters and echo the generated password
echo password_generate(7)."\n";
?>
```

### 10. Write a PHP script to replace the first 'the' of the following string with 'That'.

```php
<?php
// Define a string variable containing the phrase "the quick brown fox jumps over the lazy dog."
$str = 'the quick brown fox jumps over the lazy dog.';
// Use preg_replace function to replace the first occurrence of the word 'the' with 'That' in the string.
// The pattern '/the/' is a regular expression pattern matching the word 'the'.
// 'That' is the replacement string.
// The '1' parameter specifies that only the first occurrence of 'the' should be replaced.
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>
```

### 11. Write a PHP script to find the first character that is different between two strings.

```php
<?php
// Define two strings to compare
$str1 = 'football';
$str2 = 'footboll';

// Calculate the position of the first difference between the two strings
$str_pos = strspn($str1 ^ $str2, "\0");

// Output the position of the first difference along with the characters at that position
printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
```

### 12. Write a PHP script to put a string in an array.

```php
<?php
// Define a multi-line string containing the lyrics of a song
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

// Explode the multi-line string into an array using "" as the delimiter
$arra1 = explode("<br>", $str);

// Display the array containing the lines of the song
var_dump($arra1);
?>
```
### 13 Write a PHP script to get the filename component of the following path.

```php
<?php
// Define the path of the file
$path = 'www.example.com/public_html/index.php';

// Extract the filename from the path using the basename() function
// The second argument ".php" specifies the suffix to be removed from the filename
$file = basename($path, ".php");

// Output the extracted filename
echo $file."\n";
?>
```

### 14. Write a PHP script to print the next character of a specific character.

```php
<?php
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>
```

### 15. Write a PHP script to remove a part of a string from the beginning.

```php
<?php
$sub_string = 'rayy@'; 
// Define the substring to be checked at the beginning of the string.
$str = 'rayy@example.com'; 
// Define the full string.

if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
    // Check if the substring matches the beginning of the string.
    $str = substr($str, strlen($sub_string));
    // If it matches, remove the substring from the beginning of the string.
}

echo $str."\n"; 
// Output the modified string.
?>
```

### 16. Write a PHP script to get a hex dump of a string.
```php
<?php
$str = 'rayy@example.com';
// Define the string.

echo bin2hex($str)."\n";
// Convert the string to hexadecimal representation and output it.
?>
```

### 17. Write a PHP  script to insert a string at the specified position in a given string.

```php
<?php
$original_string = 'The brown fox'; 
// Define the original string.
$string_to_insert ='quick'; 
// Define the string to be inserted.
$insert_pos = 4; 
// Define the position where the insertion will occur.
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0); 
// Insert the substring at the specified position in the original string.
echo $new_string."\n"; 
// Output the modified string.
?>
```

### 18. Write a PHP script to get the first word of a sentence.

```php
<?php
$s = 'The quick brown fox';
// Define the original string.

$arr1 = explode(' ',trim($s));
// Split the string into an array using space as the delimiter after removing leading and trailing whitespace.

echo $arr1[0]."\n";
// Output the first element of the resulting array.
?>
```

### 19. Write a PHP script to remove all leading zeroes from a string.

```php
<?php
$x = '000547023.24';
// Define the original string.

$str1 = ltrim($x, '0');
// Remove leading zeros from the string.

echo $str1."\n";
// Output the modified string.
?>
```

### 20. Write a PHP script to remove part of a string.

```php
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
// Define the original string.

echo str_replace("fox", " ", $my_str)."\n";
// Replace all occurrences of "fox" with a space in the original string and output the result.
?>
```

### 21. Write a PHP script to remove trailing slash from a string.

```php
<?php
$my_str = 'The quick brown fox jumps over the lazy dog///';
// Define the original string.

echo rtrim($my_str, '/')."\n";
// Remove trailing slashes from the original string and output the result.
?>
```

### 22. Write a PHP script to get the characters after the last '/' in an url.

```php
<?php
$my_url = 'http://www.example.com/5478631';
// Define the URL string.

echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
// Extract the portion of the URL after the last occurrence of '/' and output it.
?>
```

### 23. Write a PHP script to replace multiple characters from the following string.

```php
<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
// Define the original string.

echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
// Replace all occurrences of special characters with a space in the original string and output the result.
?>
```

### 24. Write a PHP script to select first 5 words from the following string.

```php
<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
// Define the original string.

echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
// Split the string into an array of words, take the first 5 elements, join them with a space, and output the result.
?>
```


### 25. Write a PHP script to remove comma(s) from the following numeric string.

```php
<?php
$str1 = "2,543.12";
// Define the original string.

$x = str_replace( ',', '', $str1);
// Remove all commas from the original string.

if( is_numeric($x))
// Check if the resulting string is numeric.
{
  echo $x."\n";
  // If numeric, echo the modified string.
}
?>
```

### 26. Write a PHP script to print letters from 'a' to 'z'.

```php
<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
// Loop through ASCII values of lowercase letters from 'a' to 'z'.

 echo chr($x);
// Convert ASCII value to corresponding character and echo.

 echo "\n";
// Output newline character.
?>
```

