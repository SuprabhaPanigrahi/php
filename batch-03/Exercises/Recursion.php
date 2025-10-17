<?php

// function sum($n1,$n2)
// {
//    if($n2==0){
//       return $n1;
//    }
//    return sum(++$n1,--$n2);
// }

// echo sum(5,10);

function fact($num)
{
   if($num==0){
      return 1;
   }
   return $num*fact($num-1);
}

echo fact(5);