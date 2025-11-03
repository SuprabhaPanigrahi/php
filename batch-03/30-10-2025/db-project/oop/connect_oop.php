<?php
include_once 'db_oopConfing.php';
$connection = new mysqli(DBConfig::DB_HOST, DBConfig::DB_USER, DBConfig::DB_PASS, DBConfig::DB_NAME, DBConfig::DB_PORT);
if (!$connection) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";