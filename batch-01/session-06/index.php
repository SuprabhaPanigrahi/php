<?php
   session_start();
    
   $employee = ["id"=>100,"name"=>"John Doe","email"=>'john@example.com'];

   $_SESSION["emp"] = $employee;

   // Redirect browser
   header("Location: showdata.php"); 

?>