<?php
include_once 'db_config.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>