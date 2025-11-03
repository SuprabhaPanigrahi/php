<?php
include_once 'connection.php';
// Perform seeding tasks here
 // Select the newly created database
    mysqli_select_db($conn, 'customer_db'); 
// Seed countries table
$countries = [
    ['name' => 'United States', 'code' => 'US'],
    ['name' => 'Canada', 'code' => 'CA'],
    ['name' => 'United Kingdom', 'code' => 'UK'],
    ['name' => 'Australia', 'code' => 'AU'],
    ['name' => 'India', 'code' => 'IN']
];

foreach ($countries as $country) {
    $name = mysqli_real_escape_string($conn, $country['name']);
    $code = mysqli_real_escape_string($conn, $country['code']);
    $insertSql = "INSERT INTO countries (name, code) VALUES ('$name', '$code')";
    if (mysqli_query($conn, $insertSql)) {
        echo "\nInserted country: " . $name;
    } else {
        die("\nError inserting country " . $name . ": " . mysqli_error($conn));
    }
}

// Seed states table

$states = [
    ['name' => 'California', 'countryId' => 1],
    ['name' => 'Texas', 'countryId' => 1],
    ['name' => 'Ontario', 'countryId' => 2],
    ['name' => 'Quebec', 'countryId' => 2],
    ['name' => 'Maharashtra', 'countryId' => 5],
    ['name' => 'Tamil Nadu', 'countryId' => 5],
    ['name' => 'Karnataka', 'countryId' => 5],
    ['name' => 'New South Wales', 'countryId' => 4],
    ['name' => 'Victoria', 'countryId' => 4],
    ['name' => 'England', 'countryId' => 3]
];

foreach ($states as $state) {
    $name = mysqli_real_escape_string($conn, $state['name']);
    $countryId = (int)$state['countryId'];
    $insertSql = "INSERT INTO states (name, countryId) VALUES ('$name', $countryId)";
    if (mysqli_query($conn, $insertSql)) {
        echo "\nInserted state: " . $name;
    } else {
        die("\nError inserting state " . $name . ": " . mysqli_error( $conn));
    }
}

// Seed cities table
$cities = [
    ['name' => 'Los Angeles', 'stateId' => 1],
    ['name' => 'San Francisco', 'stateId' => 1],
    ['name' => 'Houston', 'stateId' => 2],
    ['name' => 'Dallas', 'stateId' => 2],
    ['name' => 'Toronto', 'stateId' => 3],
    ['name' => 'Montreal', 'stateId' => 4],
    ['name' => 'Mumbai', 'stateId' => 5],
    ['name' => 'Pune', 'stateId' => 5],
    ['name' => 'Chennai', 'stateId' => 6],
    ['name' => 'Bangalore', 'stateId' => 7],
    ['name' => 'Sydney', 'stateId' => 8],
    ['name' => 'Melbourne', 'stateId' => 9],
    ['name' => 'London', 'stateId' => 10]
];
foreach ($cities as $city) {
    $name = mysqli_real_escape_string($conn, $city['name']);
    $stateId = (int)$city['stateId'];
    $insertSql = "INSERT INTO cities (name, stateId) VALUES ('$name', $stateId)";
    if (mysqli_query($conn, $insertSql)) {
        echo "\nInserted city: " . $name;
    } else {
        die("\nError inserting city " . $name . ": " . mysqli_error($conn));
    }
}
mysqli_close($conn);