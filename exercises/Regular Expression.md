### 1. Write a PHP  script that checks if a string contains another string.

```php
<?php
// Define the regular expression pattern to match 'fox' preceded by a word character and followed by a space
$pattern = '/[^\w]fox\s/';

// Use preg_match function to check if the pattern matches the given string
if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog')) {
    // If 'fox' is found in the string, echo that it is present
    echo "'fox' is present..."."\n";
} else {
    // If 'fox' is not found in the string, echo that it is not present
    echo "'fox' is not present..."."\n";
}
?>
```

### 2. Write a PHP script that removes the last word from a string.

```php
<?php
// Define the input string
$str1 = 'The quick brown fox';

// Use preg_replace function to remove the last word along with its trailing spaces
echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1)."\n";
?>
```

### 3. Write a PHP script that removes the whitespaces from a string.

```php
<?php
// Define the input string
$str1 = 'The quick " " 	 brown fox';

// Use preg_replace function to remove all whitespace characters from the string
echo preg_replace('/\s+/', '', $str1)."\n";
?>
```


### 4. Write a PHP script to remove nonnumeric characters except comma and dot.

```php
<?php
// Define a string containing alphanumeric characters, including special characters like comma and period.
$str1 = "$12,334.00A";

// Use preg_replace function to remove all characters except digits (0-9), comma (,), and period (.).
// The regular expression pattern "/[^0-9,.]/" matches any character that is not a digit, comma, or period.
// The replacement parameter is an empty string, effectively removing all non-digit, comma, and period characters.
echo preg_replace("/[^0-9,.]/", "", $str1)."\n";
?>
```
### 5. Write a PHP script to remove new lines (characters) from a string.

```php
<?php
// Original string containing multiple spaces and newlines
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
// Using preg_replace to replace one or more consecutive spaces with a single space and removing leading/trailing spaces
echo preg_replace('/\s+/', ' ', trim($str))."\n";
?>
```

### 6. Write a PHP script to extract text (within parenthesis) from a string.

```php
<?php
// Define the input text
$my_text = 'The quick brown [fox].';

// Use preg_match to find the substring enclosed in square brackets
preg_match('#\[(.*?)\]#', $my_text, $match);

// Print the matched substring captured within the square brackets
print $match[1]."\n";
?>
```


### 7. Write a PHP script to remove all characters from a string except a-z A-Z 0-9 or " ".

```php
<?php
// Define the input string
$string = 'abcde$ddfd @abcd )der]';
// Print the old string
echo 'Old string : '.$string.'';
// Remove all characters except letters, numbers, and spaces using regular expression
$newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
// Print the new string after removing unwanted characters
echo 'New string : '.$newstr."\n";
?>
```



















