<?php
   session_start();
   $employee = $_SESSION["emp"];
   $_SESSION["department"] = ["deptid"=>1,"deptname"=>"Physics"];
   print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <ul>
        <li>ID :<?php echo $employee["id"]?></li>
        <li>NAME:<?php echo $employee["name"]?></li>
        <li>EMAIL:<?php echo $employee["email"]?></li>
     <ul>
     
</body>
</html>