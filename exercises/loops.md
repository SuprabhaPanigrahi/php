### 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.

```php
<?php
// Loop through numbers from 1 to 10
for($x=1; $x<=10; $x++)
{
    // Check if number is less than 10
    if($x < 10)
    {
        // Print number with a dash if less than 10
        echo "$x-";
    }
    else
    {
        // Print number followed by a newline if it's 10
        echo "$x"."\n";
    }
}
?>
```
### 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.

```php
<?php
// Initialize sum variable
$sum = 0;

// Loop through numbers from 1 to 30
for($x=1; $x<=30; $x++)
{
    // Add current number to the sum
    $sum += $x;
}

// Print the sum of numbers from 1 to 30
echo "The sum of the numbers 0 to 30 is $sum"."\n";
?>
```

### 3. Create a script to construct the following pattern, using nested for loop.

```php
<?php
// Outer loop to control the rows
for($x=1;$x<=5;$x++)
{
   // Inner loop to control the columns within each row
   for ($y=1;$y<=$x;$y++)
    {
        // Print a star for each column
	    echo "*";
	    
        // Add a space after each star, except for the last one in the row
	    if($y < $x)
		 {
		   echo " ";
		 }
     }
     
     // Move to the next line after printing each row
     echo "\n";
}
?>
```

### 4 Create a script to construct the following pattern, using a nested for loop.

```php
<?php
// Define the number of rows
$n = 5;

// Loop to print the upper half of the diamond
for($i=1; $i<=$n; $i++)
{
    // Loop to print the spaces and stars for each row
    for($j=1; $j<=$i; $j++)
    {
        // Print a star surrounded by spaces
        echo ' * ';
    }
    // Move to the next line after printing each row
    echo '\n';
}

// Loop to print the lower half of the diamond
for($i=$n; $i>=1; $i--)
{
    // Loop to print the spaces and stars for each row
    for($j=1; $j<=$i; $j++)
    {
        // Print a star surrounded by spaces
        echo ' * ';
    }
    // Move to the next line after printing each row
    echo '\n ';
}
?>
```
### 5 Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.

```php
<?php
// Set the value of n to 6
$n = 6;

// Initialize variable x to store the factorial value
$x = 1;

// Loop to calculate the factorial of n
for($i = 1; $i <= $n - 1; $i++)
{
    // Calculate factorial iteratively
    $x *= ($i + 1); 
}

// Print the factorial of n
echo "The factorial of  $n = $x"."\n";
?>
```
### 6 Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format :

```php
<?php
// Outer loop for iterating over values of $a from 0 to 9
for($a=0; $a< 10; $a++)
 { 
   // Inner loop for iterating over values of $b from 0 to 9
   for($b=0; $b< 10; $b++)
      {
	     // Print the concatenated values of $a and $b followed by a comma and space
	     echo $a.$b.", "; 
      }
 }
 
// Move to the next line after printing the entire pattern
printf("\n"); 

?>
```
### 7 Write a program which will count the "r" characters in the text "w3resource".

```php
<?php
// Define the text string to search within
$text = "w3resource";

// Define the character to search for
$search_char = "r";

// Initialize a counter variable to count occurrences
$count = "0";

// Loop through each character in the text string
for($x = "0"; $x < strlen($text); $x++)
  { 
    // Check if the current character matches the search character
    if(substr($text, $x, 1) == $search_char)
    {
        // Increment the counter if there's a match
        $count = $count + 1;
    }
  }

// Print the count of occurrences of the search character
echo $count."\n";

?>
```
### 8 Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.

![alt text](images/image.png)

```php
<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
// Outer loop for creating rows in the table
for($i=1; $i<=6; $i++)
{
    echo "<tr>"; // Start a new table row
    
    // Inner loop for creating cells in each row
    for ($j=1; $j<=5; $j++)
    {
        // Print the multiplication table in each cell
        echo "<td>$i * $j = " . $i * $j . "</td>";
    }
    
    echo "</tr>"; // End the table row
}
?>
```
</table>
</body>
</html>

### 9 Write a PHP script using nested for loop that creates a chess board as shown below.

![alt text](images/image-2.png)

```php
<!DOCTYPE html>
<html> 
<head> 
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 
<h3>Chess Board using Nested For Loop</h3>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 270px wide (8 columns x 60px) -->
<?php
// Outer loop for rows
for($row=1; $row<=8; $row++)
{
    echo "<tr>"; // Start a new table row
    
    // Inner loop for columns
    for($col=1; $col<=8; $col++)
    {
        // Calculate total sum of row and column indices
        $total = $row + $col;
        
        // Check if total is even or odd to determine cell color
        if($total % 2 == 0)
        {
            // If total is even, set cell background color to white
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
        }
        else
        {
            // If total is odd, set cell background color to black
            echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
    }
    
    echo "</tr>"; // End the table row
}
?>
```
</table>
</body>
</html>


### 10. Write a PHP script that creates the following table (use for loops).

![alt text](images/image-3.png)

```php
<?php
// Start the HTML table with border attribute and collapsed borders style
echo "<table border =\"1\" style='border-collapse: collapse'>";

// Loop through rows
for ($row=1; $row <= 10; $row++) { 
    echo "<tr> \n"; // Start a new table row
    
    // Loop through columns
    for ($col=1; $col <= 10; $col++) { 
        // Calculate the product of column and row
        $p = $col * $row;
        
        // Print the product in a table cell
        echo "<td>$p</td> \n";
    }
    
    echo "</tr>"; // End the table row
}

// Close the HTML table
echo "</table>";

?>
```

### 11. Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".

```php

<?php
// Loop through numbers from 1 to 100
for ($i = 1; $i <= 100; $i++)
{
    // Check if the number is divisible by both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0)
    {
        // Print FizzBuzz if divisible by both 3 and 5
        echo $i . " FizzBuzz" . "\n";
    }
    // Check if the number is divisible by 3 only
    else if ($i % 3 == 0)
    {
        // Print Fizz if divisible by 3 only
        echo $i . " Fizz" . "\n";
    }
    // Check if the number is divisible by 5 only
    else if ($i % 5 == 0)
    {
        // Print Buzz if divisible by 5 only
        echo $i . " Buzz" . "\n";
    }
    // If the number is not divisible by 3 or 5
    else
    {
        // Print the number itself
        echo $i . "\n";
    }
}
?>
```

### 12. Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).

```php
<?php
// Initialize the value of n
$n = 5; 

// Print the value of n
echo "n = " . $n . "\n";

// Initialize a counter variable
$count = 1;

// Outer loop for rows
for ($i = $n; $i > 0; $i--) 
{
    // Inner loop for columns
    for ($j = $i; $j < $n + 1; $j++) 
    {
        // Print the count with 4-character width
        printf("%4s", $count);
        
        // Increment the count
        $count++;
    } 
    
    // Move to the next line after each row
    echo "\n";
}
?>
```

### 13. Write a PHP program to print alphabet pattern 'A'.

```php
 <?php
// Loop for rows
for ($row = 0; $row <= 7; $row++)
{
    // Loop for columns
    for ($column = 0; $column <= 7; $column++)
    {
        // Condition to determine if '*' or ' ' should be printed
        if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
            echo "*";    // Print '*' if conditions are met
        else  
            echo " ";    // Print ' ' if conditions are not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```
###  14. Write a PHP program to print alphabet pattern 'B'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```

### 15. Write a PHP program to print alphabet pattern 'C'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```

### 16.  Write a PHP program to print alphabet pattern 'D'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and $row != 0 and $row != 6))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```
### 17. Write a PHP program to print alphabet pattern 'E'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or (($row == 0 or $row == 6) and ($column > 1 and $column < 6)) or ($row == 3 and $column > 1 and $column < 5))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```

### 18. Write a PHP program to print alphabet pattern 'F'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or ($row == 0 and $column > 1 and $column > 6) or ($row == 3 and $column > 1 and $column < 5))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```
### 19  Write a PHP program to print alphabet pattern 'G'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if (($column == 1 and $row != 0 and $row != 6) or (($row == 0 or $row == 6) and $column > 1 and $column < 5) or ($row == 3 and $column > 2 and $column < 6) or ($column == 5 and $row != 0 and $row != 2 and $row != 6))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```
### 20 Write a PHP program to print alphabet pattern 'H'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if (($column == 1 or $column == 5) or ($row == 3 and $column > 1 and $column < 6))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```

### 21. Write a PHP program to print alphabet pattern 'I'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 3 or ($row == 0 and $column > 0 and $column < 6) or ($row == 6 and $column > 0 and $column < 6))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```

###  22. Write a PHP program to print alphabet pattern 'J'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if (($column == 4 and $row != 6) or ($row == 0 and $column > 2 and $column < 6) or ($row == 6 and $column == 3) or ($row == 5 and $column == 2))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";  // Move to the next line after each row is printed
}
?>
```

### 23. Write a PHP program to print alphabet pattern 'K'.

```php
<?php
// Initialize variables
$j = 5;    // Variable for controlling the second diagonal position
$i = 0;    // Variable for controlling the first diagonal position

// Loop for rows
for ($row=0; $row<=7; $row++)
{
    // Loop for columns
    for ($column=0; $column>=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or (($row == $column + 1) and $column != 0))
            echo "*";   // Print '*' if condition is met
        else if ($row == $i and $column == $j)
           {  
              echo "*";    // Print '*' if condition is met
              $i=$i+1;  // Increment the first diagonal position
              $j=$j-1;  // Decrement the second diagonal position
           }
        else
            echo " ";   // Print ' ' if condition is not met
    }    
     echo "\n";    // Move to the next line after each row is printed
}
?>
```
### 24. Write a PHP program to print alphabet pattern 'L'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or ($row == 6 and $column != 0 and $column < 6))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 25. Write a PHP program to print alphabet pattern 'M'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or $column == 5 or ($row == 2 and ($column == 2 or $column == 4)) or ($row == 3 and $column == 3))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```
### 26. Write a PHP program to print alphabet pattern 'N'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or $column == 5 or ($row == $column and $column != 0 and $column != 6))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 27. Write a PHP program to print alphabet pattern 'O'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($column == 1 or $column == 5) and $row != 0 and $row != 6) or (($row == 0 or $row == 6) and $column > 1 and $column < 5))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 28. Write a PHP program to print alphabet pattern 'P'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or (($row == 0 or $row == 3) and $column > 0 and $column < 5) or (($column == 5 or $column == 1) and ($row == 1 or $row == 2)))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 29. Write a PHP program to print alphabet pattern 'Q'.

```php
<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if (($column == 1 and $row != 0 and $row != 6) or ($row == 0 and $column > 1 and $column < 5) or ($column == 5 and $row != 0 and $row != 5) or ($row == 6 and $column > 1 and $column < 4) or ($column == $row - 1 and $row > 3))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
?>
```

### 30. Write a PHP program to print alphabet pattern 'R'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 1 or (($row == 0 or $row == 3) and $column > 1 and $column < 5) or ($column == 5 and $row != 0 and $row < 3) or ($column == $row - 1 and $row > 2))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 31. Write a PHP program to print alphabet pattern 'S'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($row == 0 or $row == 3 or $row == 6) and $column > 1 and $column < 5) or ($column == 1 and ($row == 1 or $row == 2 or $row == 6)) or ($column == 5 and ($row == 0 or $row == 4 or $row == 5)))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 32. Write a PHP program to print alphabet pattern 'T'.

```php
<?php
// Loop for rows
for ($row=0; $row<6; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ($column == 3 or ($row == 0 and $column > 0 and $column < 6))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 33. Write a PHP program to print alphabet pattern 'U'.

```php
 <?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($column == 1 or $column == 5) and $row != 6) or ($row == 6 and $column > 1 and $column < 5))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 34. Write a PHP program to print alphabet pattern 'V'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($column == 1 or $column == 5) and $row < 5) or ($row == 6 and $column == 3) or ($row == 5 and ($column == 2 or $column == 4)))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 35. Write a PHP program to print alphabet pattern 'W'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($column == 1 or $column == 5) and $row < 6) or (($row == 5 or $row == 4) and $column == 3) or ($row == 6 and ($column == 2 or $column == 4)))   
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```
### 36. Write a PHP program to print alphabet pattern 'X'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($column == 1 or $column == 5) and ($row < 4 or $row < 2)) or $row == $column and $column > 0 and $column < 6 or ($column == 2 and $row == 4) or ($column == 4 and $row == 2))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 37 Write a PHP program to print alphabet pattern 'Y'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($column == 1 or $column == 5) and $row < 2) or $row == $column and $column > 0 and $column < 4 or ($column == 4 and $row == 2) or (($column == 3) and $row > 3))
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```

### 38. Write a PHP program to print alphabet pattern 'Z'.

```php
<?php
// Loop for rows
for ($row=0; $row<7; $row++)
{
    // Loop for columns
    for ($column=0; $column<=7; $column++)
    {
        // Condition to determine whether to print '*' or ' '
        if ((($row == 0 or $row == 6) and $column >= 0 and $column <= 6) or $row+$column==6)
            echo "*";    // Print '*' if condition is met
        else  
            echo " ";    // Print ' ' if condition is not met
    }        
    echo "\n";    // Move to the next line after each row is printed
}
?>
```
