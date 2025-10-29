<?php
   session_start();
  $books = isset($_SESSION['books']) ? unserialize($_SESSION['books']) : [];   
  
  print_r($books);
?>