<?php
/*
 * Problem :LCM & GCD
 * WAP to find LCM & GCD of two numbers
 * INPUT : 12, 15
 * OUTPUT : LCM = 60, GCD = 3
 */

echo "Enter Num1 : ";
$num1 = readline();
echo "Enter Num2 : ";
$num2 = readline();
$gcd = 1;
$min = $num1;
if($num1 < $num2){
    $min = $num1;
}else{
    $min = $num2;
}
for($i=2;$i<=$min;$i++){
    if($num1 % $i == 0 && $num2 % $i == 0){
        if($num1==1 || $num2==1)
            {
                $gcd=$i;
                break;
            }
    }
}
echo "GCD of $num1 and $num2 is : $gcd \n";
$lcm = ($num1 * $num2) / $gcd;  
echo "LCM of $num1 and $num2 is : $lcm \n";
