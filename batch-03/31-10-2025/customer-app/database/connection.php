<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'csmpl@123');
//define('DB_NAME', 'customer_db');   
define('DB_PORT', 3306);   
// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, '', DB_PORT);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// }else {
//     echo "\nConnected successfully";
// }
