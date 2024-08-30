<?php
    
    $x =[[1,2,3],[4,5,6],[7,8,9]];

    $y = array_reduce($x,function($prev,$curr){
            return array_merge($prev,$curr);
    },[]);

    $strarr =["Welcome","to","CSM","Technologies"];

    $str  = array_reduce($strarr,function($prev,$curr){
            return $prev.' '.$curr;
    },'');

   // print_r($x);
    //print_r($y);
    print_r ($strarr);
    echo $str;


    function sum(...$args)
    {
        $isNumeric = true;
        foreach($args as $arg){
             if(!is_numeric($arg)){
                $isNumeric=false;
                echo "Invalid Arguments";
                return;
             }
        }
        return array_reduce($args,fn($sum,$num)=>$sum + $num,0);
    }

    echo "sum=".sum(1,2,3);
    echo "\n";
    echo "sum=".sum(10,20,30,'k',50);
?>