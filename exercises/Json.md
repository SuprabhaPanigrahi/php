### 1. Write a PHP script to decode a JSON string.

```php
<?php
// Define a JSON string containing key-value pairs
$json = 
'{
"uglify-js": "1.3.4"
, "jshint": "0.9.1"
, "recess": "1.1.8"
, "connect": "2.1.3"
, "hogan.js": "2.0.0"
}';

// Decode the JSON string into a PHP object
var_dump(json_decode($json));

// Output a newline character for formatting
echo "\n";

// Decode the JSON string into an associative array
var_dump(json_decode($json, true));
?>
```
### 2. Write a PHP script to decode large integers.

```php
<?php
// Define a JSON string containing a large number as a string value
$json = '{"number": 123456789012345678901234567890}';

// Decode the JSON string into a PHP object
var_dump(json_decode($json));
?>
```

### 3. Write a PHP script to get JSON representation of a value from an array.

```php
<?php
// Define an associative array with package names and versions
$arra = array("uglify-js"=> "1.3.4", "jshint"=> "0.9.1", "recess"=> "1.1.8" ,"connect"=> "2.1.3", "hogan.js"=>"2.0.0"); 

// Define a simple array of colors
$myarray = array('red', 'green', 'white');

// Encode the associative array into a JSON string
var_dump(json_encode($arra));
echo "\n";

// Encode the simple array into a JSON string
var_dump(json_encode($myarray));
?>
```


### 4. Write a PHP function to display JSON decode errors.

```php
<?php
// Define a function to handle JSON error messages
function json_error_message($json_str)
{
    // Create an array to hold the JSON string
    $json[] = $json_str;
    
    // Output the JSON string
    echo $json;
    
    // Iterate through the array of JSON strings
    foreach ($json as $string)
    {
        // Output the decoding attempt
        echo 'Decoding: ' . $string."\n";
        
        // Attempt to decode the JSON string
        json_decode($string);
        
        // Check for JSON decoding errors and output corresponding messages
        switch (json_last_error())
        {
            case JSON_ERROR_NONE:
                echo ' - No errors'."\n";
                break;
            case JSON_ERROR_DEPTH:
                echo ' - Maximum stack depth exceeded'."\n";
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' - Underflow or the modes mismatch'."\n";
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo ' - Unexpected control character found'."\n";
                break;
            case JSON_ERROR_SYNTAX:
                echo ' - Syntax error, malformed JSON'."\n";
                break;
            case JSON_ERROR_UTF8:
                echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."\n";
                break;
            default:
                echo ' - Unknown error'."\n";
                break;
        }
    }
}

// Call the function with a sample JSON string
json_error_message('{"color1": "Red Color"}');
?>
```
