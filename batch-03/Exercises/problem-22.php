<?php
$sum = fn($n1,$n2)=>$n1 + $n2;

$add = $sum;

echo gettype($sum);
echo "\n";
echo $sum(10,20);
echo "\n";
echo $add(30,40);