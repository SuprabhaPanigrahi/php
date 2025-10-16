<?php
  $nums = readline("Enter numbers separated by comma: ");
  $numArray = explode(",", $nums);
  $min = $numArray[0];
  for($i=1; $i<count($numArray); $i++){
      if($numArray[$i] < $min){
          $min = $numArray[$i];
      }
  }
  $gcd = 1;
  for($i=2; $i<=$min; $i++){
     $flag = true;
     for($j=0; $j<count($numArray); $j++){
         if($numArray[$j] % $i != 0){
             $flag = false;
             break;
         }
     }
     if($flag){
          $gcd = $i;
     }
  }
  echo "GCD of (".implode(", ", $numArray).") is : $gcd \n";
  $lcm = 1;
  for($i=0; $i<count($numArray); $i++){
      $lcm = ($lcm * $numArray[$i]) / $gcd;
  }
  
  echo "LCM of (".implode(", ", $numArray).") is : $lcm \n";
?>