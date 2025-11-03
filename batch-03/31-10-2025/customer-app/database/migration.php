<?php
include_once 'connection.php';

// Perform migration tasks here

//Create a new database
$sql = "CREATE DATABASE IF NOT EXISTS customer_db";

if (mysqli_query($conn, $sql)) {
    echo "\nDatabase created successfully";
    // Select the newly created database
    mysqli_select_db($conn, 'customer_db'); 

    // Create a customers table
    
    $tableSql = "CREATE TABLE IF NOT EXISTS customers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        phone VARCHAR(15),
        address VARCHAR(100),
        countryId INT(11),
        stateId INT(11),
        cityId INT(11),
        image VARCHAR(100),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        created_by INT(11),
        updated_by INT(11),
        deleted_at TIMESTAMP NULL DEFAULT NULL,
        deleted_by INT(11),
        is_deleted TINYINT(1) DEFAULT 0
    )"; 
    if (mysqli_query($conn, $tableSql)) {
        echo "\nTable customers created successfully";
    } else {
        die("Error creating table: " . mysqli_error($conn));
    }

    //Create Coutnries table
    $countriesTableSql = "CREATE TABLE IF NOT EXISTS countries (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        code VARCHAR(10) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        created_by INT(11),
        updated_by INT(11),
        deleted_at TIMESTAMP NULL DEFAULT NULL,
        deleted_by INT(11),
        is_deleted TINYINT(1) DEFAULT 0
    )";
    if (mysqli_query($conn, $countriesTableSql)) {
        echo "\nTable countries created successfully";
    } else {
        die("\nError creating countries table: " . mysqli_error($conn));
    }

    //create state table
    $statesTableSql = "CREATE TABLE IF NOT EXISTS states (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        countryId INT(11) NOT NULL,
        name VARCHAR(50) NOT NULL,  
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
        created_by INT(11),
        updated_by INT(11),
        deleted_at TIMESTAMP NULL DEFAULT NULL,
        deleted_by INT(11),
        is_deleted TINYINT(1) DEFAULT 0
    )";
    if (mysqli_query($conn, $statesTableSql)) {
        echo "\nTable states created successfully";
    } else {
        die("\nError creating states table: " . mysqli_error($conn));
    }

    //create city table
    $citiesTableSql = "CREATE TABLE IF NOT EXISTS cities (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        stateId INT(11) NOT NULL,
        name VARCHAR(50) NOT NULL,  
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
        created_by INT(11),
        updated_by INT(11),
        deleted_at TIMESTAMP NULL DEFAULT NULL,
        deleted_by INT(11),
        is_deleted TINYINT(1) DEFAULT 0
    )";
    if (mysqli_query($conn, $citiesTableSql)) {
        echo "\nTable cities created successfully";
    } else {
        die("\nError creating cities table: " . mysqli_error($conn));
    }
} else {
    die("\nError creating database: " . mysqli_error($conn));
}
mysqli_close($conn);
?>