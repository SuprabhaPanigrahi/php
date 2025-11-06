<?php
$conn = mysqli_connect("localhost","root","csmpl@123","demo");  
$sql ="Select * from user";

$result = mysqli_query($conn,$sql);

$users =[];

while($row = mysqli_fetch_assoc($result)){
  array_push($users,$row);
}

echo json_encode($users);