
<?php
function printLine(){
    echo "----------------";
}

printLine();

$print = fn()=> "----------";

echo $print();

function sum($num1,$num2){
    return $num1 + $num2;
}

echo sum(5,6)."\n";

$add = fn($num1,$num2) => $num1 + $num2;

echo $add(50,30);

$str = 'A';

$x = 5;

$str1 = "x=$x\n abc\n";

$str2 = 'x=$x\n';

echo $str1;
echo "\n";
echo $str2;

$heredoc = <<<EOT
Hello,
Welcome to the Heredoc example.
EOT;

echo $heredoc ;

?>