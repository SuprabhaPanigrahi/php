<?php
   $x = 5;
   var_dump($x);
   echo '<br/>';
   $x = "abc";
   var_dump($x);
   echo '<br/>';
   $x = false;
   var_dump($x);
   echo '<br/>';
   $x = null;
   var_dump($x);
   echo '<br/>';
   $x = [10,"20",true];
   var_dump($x);
   echo '<br/>';

   function sum($x,$y){
      return $x+$y;
   };

   $add = function ($x,$y){
    return $x+$y;
   };
   echo '<br/>';
   echo $add(5,7);
   echo '<br/>';
   var_dump($add);


   $first_name = "Alok";
   $last_name = "Kumar";

   $full_name = $first_name." ".$last_name;

   echo $full_name;


   $p = true;
   echo gettype($p);
   echo '<br/>';
   
   $status = null;
   $result = $status ?? 0;
   

   $x = 5;

   $res = (4<5) || (++$x > 10) ;
   echo $x;
?>