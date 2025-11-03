<?php
include 'connect_procedure.php';
$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);
var_dump($result);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "ID: " . $row["EMPLOYEE_ID"]. " - Name: " . $row["FIRST_NAME"]. "\n";
    }
} else {
    echo "0 results";
} 
