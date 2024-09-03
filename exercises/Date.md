### 1. Write a PHP  script which will display the copyright information in the following format. To get current year you can use the date() function.

```php
<?php
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Copyright Information</title>
</head>
<body>
<!-- Output the copyright symbol followed by the current year -->
<p>© <?php echo date('Y'); ?> PHP Exercises - w3resource</p>
</body>
</html>
?>
```

### 2. Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday.

```php
<?php
// Set the target date for the birthday using mktime() function: December 31, 2013
$target_days = mktime(0,0,0,12,31,2013);

// Get the current timestamp
$today = time();

// Calculate the difference in seconds between the target date and today's date
$diff_days = ($target_days - $today);

// Convert the difference in seconds to days
$days = (int)($diff_days/86400);

// Print the number of days until the next birthday
print "Days till next birthday: $days days!"."\n";
?>
```

### 3. Write a PHP script to print the current date in the following format. To get current date's information you can use the date() function.

```php
<?php
// Print the current date in the format Year/Month/Day using date() function with "Y/m/d" format
echo date("Y/m/d") . "\n";

// Print the current date in the format Year.Month.Day using date() function with "y.m.d" format
echo date("y.m.d") . "\n";

// Print the current date in the format Day-Month-Year using date() function with "d-m-y" format
echo date("d-m-y")."\n";
?>
```

### 4. Write a PHP script to calculate the difference between two dates.

```php
<?php
// Start date
$sdate = "1981-11-04";
// End date
$edate = "2013-09-04";

// Calculate the difference between the end date and the start date in seconds
$date_diff = abs(strtotime($edate) - strtotime($sdate));

// Calculate the number of years in the difference
$years = floor($date_diff / (365*60*60*24));
// Calculate the number of months in the remaining difference
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
// Calculate the number of days in the remaining difference
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

// Output the calculated duration
printf("%d years, %d months, %d days", $years, $months, $days);
// Print a newline character for formatting
printf("\n");
?>
```

### 5. Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.

```php
<?php
// Original date in yyyy-mm-dd format
$odate = "2012-09-12";

// Converting the original date to a new format (dd-mm-yyyy)
$newDate = date("d-m-Y", strtotime($odate));

// Displaying the new formatted date
echo $newDate."\n";
?>
```
### 6. Write a PHP script to convert the date to timestamp.

```php
<?php
// Convert the date string '12-05-2014' to a Unix timestamp
$timestamp = strtotime('12-05-2014');
// Print the Unix timestamp
echo $timestamp."\n";
?>
```

### 7. Write a PHP script to calculate a number of days between two dates.

```php
<?php
$to_date = time(); // Current date and time in Unix timestamp format
$from_date = strtotime("2012-01-31"); // Convert the specified date string to a Unix timestamp
$day_diff = $to_date - $from_date; // Calculate the difference in seconds between the two timestamps
echo floor($day_diff/(60*60*24))."\n"; // Convert the difference to days and print it
?>
```

### 8. Write a PHP script to get the first and last day of a month from a specified date.
```php
<?php
$dt = "2008-02-23"; // Define the date string
echo 'First day : '. date("Y-m-01", strtotime($dt)).' - Last day : '. date("Y-m-t", strtotime($dt));  
?>
```
### 9. Write a PHP script to print like : Saturday the 7th.

```php
<?php
echo date('l \t\h\e jS'); // Outputs the current day of the week followed by the day of the month with the suffix.
?>
```

### 10. Write a PHP script to check whether the given dates are valid or not?

```php
<?php
var_dump(checkdate(2, 30, 2008)); // Checks if the given date (February 30, 2008) is valid.
var_dump(checkdate(2, 29, 2008)); // Checks if the given date (February 29, 2008) is valid.
?>
```
### 11. Write a PHP script to get time difference in days and years, months, days, hours, minutes, seconds between two dates.

```php
<?php
$date1 = new DateTime('2012-06-01 02:12:51'); // Creating a DateTime object for the first date.
$date2 = $date1->diff(new DateTime('2014-05-12 11:10:00')); // Calculating the difference between two dates.
echo $date2->days.'Total days'."\n"; // Outputting the total number of days between the two dates.
echo $date2->y.' years'."\n"; // Outputting the number of years in the difference.
echo $date2->m.' months'."\n"; // Outputting the number of months in the difference.
echo $date2->d.' days'."\n"; // Outputting the number of days in the difference.
echo $date2->h.' hours'."\n"; // Outputting the number of hours in the difference.
echo $date2->i.' minutes'."\n"; // Outputting the number of minutes in the difference.
echo $date2->s.' seconds'."\n"; // Outputting the number of seconds in the difference.
?>
```
### 12. Write a PHP script to change month number to month name.

```php
<?php
$month_num = 7; // Assigning the month number 7 to the variable $month_num.
$month_name = date("F", mktime(0, 0, 0, $month_num, 10)); // Generating the month name using the mktime function.
echo $month_name."\n"; // Outputting the month name.
?>
```

### 13. Write a PHP script to get yesterday's date.

```php
<?php
$dt = new DateTime(); // Creating a new DateTime object representing the current date and time.
$dt->sub(new DateInterval('P1D')); // Subtracting one day from the DateTime object using the sub() method and a DateInterval of one day.
echo $dt->format('F j, Y')."\n"; // Formatting the modified date and time as "Month Day, Year" and outputting it, followed by a newline character.
?>
```

### 14. Write a PHP script to get the current date/time of 'Australia/Melbourne'.

```php
<?php
date_default_timezone_set('America/Los_Angeles');
$date = date('m/d/Y h:i:s a', time());
echo $date;
?>
```

### 15. Write a PHP script to check whether a date is a weekend or not.

```php
<?php
$dt='2011-01-04'; // Assigning the date '2011-01-04' to the variable $dt.
$dt1 = strtotime($dt); // Converting the date string to a Unix timestamp and storing it in $dt1.
$dt2 = date("l", $dt1); // Formatting the Unix timestamp $dt1 to retrieve the day of the week in full textual representation (e.g., 'Monday') and storing it in $dt2.
$dt3 = strtolower($dt2); // Converting the day of the week to lowercase and storing it in $dt3.

if (($dt3 == "saturday") || ($dt3 == "sunday")) { // Checking if the day is Saturday or Sunday.
    echo $dt3.' is weekend'."\n"; // Outputting that it's a weekend if the day is Saturday or Sunday.
} else {
    echo $dt3.' is not weekend'."\n"; // Outputting that it's not a weekend if the day is not Saturday or Sunday.
}
?>
```

### 16. Write a PHP script to add/subtract the number of days from a particular date.

```php
<?php
$dt='2011-01-01'; // Assigning the date '2011-01-01' to the variable $dt.
echo 'Original date : '.$dt."\n"; // Outputting the original date.

$no_days = 40; // Setting the number of days to 40.
$bdate = strtotime("-".$no_days." days", strtotime($dt)); // Subtracting 40 days from the original date using strtotime function and storing the result in $bdate.
$adate = strtotime("+".$no_days." days", strtotime($dt)); // Adding 40 days to the original date using strtotime function and storing the result in $adate.

echo 'Before 40 days : '.date("Y-m-d", $bdate)."\n"; // Outputting the date 40 days before the original date.
echo 'After  40 days : '.date("Y-m-d", $adate)."\n"; // Outputting the date 40 days after the original date.
?>
```

### 17. Write a PHP function to get start and end date of a week (by week number) of a particular year.

```php
<?php
function Start_End_Date_of_a_week($week, $year)
{
    $time = strtotime("1 January $year", time()); // Getting the timestamp for January 1st of the given year.
    $day = date('w', $time); // Getting the numeric representation of the day of the week for January 1st.
    $time += ((7*$week)+1-$day)*24*3600; // Calculating the timestamp for the starting day of the given week.
    $dates[0] = date('Y-n-j', $time); // Formatting the starting date of the week.
    $time += 6*24*3600; // Adding six days to get the timestamp for the end of the week.
    $dates[1] = date('Y-n-j', $time); // Formatting the end date of the week.
    return $dates; // Returning the array containing the starting and end dates of the week.
}

$result = Start_End_Date_of_a_week(12, 2014); // Calling the function to get the starting and end dates of the 12th week of 2014.
echo 'Starting date of the week: '. $result[0]."\n"; // Outputting the starting date of the week.
echo 'End date the week: '. $result[1]; // Outputting the end date of the week.
?>
```

### 18. Write a PHP script to calculate the current age of a person.

```php
<?php
$bday = new DateTime('11.4.1987'); // Creating a DateTime object representing your date of birth.
$today = new Datetime(date('m.d.y')); // Creating a DateTime object representing today's date.
$diff = $today->diff($bday); // Calculating the difference between your date of birth and today's date.
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d); // Displaying your age in years, months, and days.
printf("\n"); // Adding a new line for formatting.
?>
```
### 19. Write a PHP script to calculate weeks between two dates.

```php
<?php
// Define a function to calculate the number of weeks between two dates
function week_between_two_dates($date1, $date2)
{
    // Create DateTime objects from the input dates with the format 'm/d/Y'
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    
    // Swap the dates if the first date is greater than the second date
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    
    // Calculate the difference in days between the two dates and divide by 7 to get the number of weeks
    return floor($first->diff($second)->days/7);
}

// Define the input dates
$dt1 = '1/1/2014';
$dt2 = '12/31/2014';

// Calculate and display the number of weeks between the two dates
echo 'Weeks between '.$dt1.' and '. $dt2. ' is '. week_between_two_dates($dt1, $dt2)."\n";
?>
```

### 20. Write a PHP script to get the number of the month before the current month.

```php
<?php
// Echoes the month of the date obtained by subtracting 1 month from the current date
echo date('m', strtotime('-1 month'))."\n";
?>
```
### 21. Write a PHP script to convert seconds into days, hours, minutes and seconds.

```php
<?php
// Define a function to convert seconds into a human-readable format
function convert_seconds($seconds) 
 {
  // Create DateTime objects representing the start and end timestamps
  $dt1 = new DateTime("@0");
  $dt2 = new DateTime("@$seconds");
  
  // Calculate the difference between the two timestamps
  $diff = $dt1->diff($dt2);
  
  // Format the difference to display days, hours, minutes, and seconds
  return $diff->format('%a days, %h hours, %i minutes and %s seconds');
 }

// Call the function and echo the result
echo convert_seconds(200000)."\n";
?>
```

### 22. Write a PHP script to get the last 6 months from the current month.

```php
<?php
// Initialize an empty array to store the months
$months = [];

// Loop through 6 iterations to generate the last 6 months
for ($i = 1; $i <= 6; $i++) 
{
    // Generate the date string for the first day of the month $i months ago
    $date = date('Y-m-01', strtotime(date('Y-m-01') . " -$i months"));
    
    // Append the date string to the $months array
    $months[] = $date;
}

// Output the array containing the last 6 months
var_dump($months);
?>
```

### 23. Write a PHP script to get the current month and previous three months.

```php
<?php
// Output the current month and year
echo date("M - Y")."\n";

// Output the month and year for 1 month ago
echo date("M - Y",strtotime("-1 Month"))."\n";

// Output the month and year for 2 months ago
echo date("M - Y",strtotime("-2 Months"))."\n";

// Output the month and year for 3 months ago
echo date("M - Y",strtotime("-3 Months"))."\n";
?>
```

### 24. Write a PHP script to increment date by one month.

```php
<?php
// Convert the date string "2012-12-21" to a Unix timestamp
$dt = strtotime("2012-12-21");

// Add 1 month to the given date using strtotime() function
// and output the result in the format "Y-m-d"
echo date("Y-m-d", strtotime("+1 month", $dt))."\n";
?>
```

### 25. Write a PHP  script to get the current date in Italian.

```php
<?php
// Set the locale to Italian and store the previous locale
$old_Locale = setlocale(LC_TIME, 'it_IT');

// Get the current date and time formatted according to the Italian locale
// The strftime function is used to format the date and time according to the specified format
echo strftime("Today is %a on %b %d, %Y")."\n";

// Restore the previous locale
setlocale(LC_TIME, $old_Locale);
?>
```
### 26. Write a PHP script to convert the number to month name.

```php
<?php
// Define the month number
$month_num  = 9;

// Create a DateTime object from the month number
$dateObj   = DateTime::createFromFormat('!m', $month_num);

// Format the DateTime object to retrieve the full month name
$month_name = $dateObj->format('F');

// Output the full month name
echo $month_name."\n";
?>
```

### 27. Write a PHP script to get the number of days of the current month.

```php
<?php
// Output the number of days for the current month
echo 'Number of days for the month of '.date('M'). ' is :' .date('t')."\n";
?>
```

### 28. Write a PHP script to display time in a specified timezone.

```php
<?php
// Set the default timezone to 'America/New_York'
ini_set('date.timezone','America/New_York'); 
// Output the current time in 12-hour format with AM/PM indication
echo '<p>'.date("g:i A").'</p>'."\n";
?>
```







