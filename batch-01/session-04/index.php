<?php
    // $arr = array(100,200,300,40,500,600);
    // foreach($arr as $item){
    //     echo $item."<br/>";
    // }
    // array_push($arr,700);
    // echo "<br/>After Pushing an Item the updated array is ,<br/>";
    
    // foreach($arr as $item){
    //     echo $item."<br/>";
    // }
    
    // array_push($arr,800,900,1000);
    // echo "<br/>After Pushing an Item the updated array is ,<br/>";
    
    // foreach($arr as $item){
    //     echo $item."<br/>";
    // }

    // array_unshift($arr,90,80);
    // echo "<br/>After Pushing an Item the updated array is ,<br/>";
    
    // foreach($arr as $item){
    //     echo $item."<br/>";
    // }

    // array_shift($arr);
    // echo "<br/>After Pushing an Item the updated array is ,<br/>";
    
    // foreach($arr as $item){
    //     echo $item."<br/>";
    // }

    // array_pop($arr);
    // echo "<br/>After Pushing an Item the updated array is ,<br/>";
    
    // foreach($arr as $item){
    //     echo $item."<br/>";
    // }


    // $numbers = [10,20,30,40,50];

    // $sqr =[] ;

    // // for($i=0;$i<count($numbers);$i++)
    // // {
    // //     array_push($sqr,$numbers[$i] * $numbers[$i]);
    // // }

    // // foreach($numbers as $number)
    // // {
    // //     array_push($sqr,$number*$number);
    // // }
       
 
    // $newNumbers = array_map(fn($num) => $num * $num ,$numbers);

    // echo "<br>List of Numbers:</br>";
    // foreach($numbers as $item){
    //     echo $item.",";
    // }

    // echo "<br>Numbers after squaring :</br>";
    // foreach($newNumbers as $item){
    //     echo $item.",";
    // }

    // //WAP to create list of names,where all names are in lowercase ,then using array_map function create a
    // // new array where each name's frist letter will be in uppercase.

    // /*
    //      ["alok","abinash"]

    //      ["Alok","Abinash"]
    // */
    // $names =["alok","abinash"];
    // echo "<br>Names:</br>";
    // foreach( $names as $name){
    //     echo $name.",";
    // }


    // $new_names = array_map(fn($name)=> ucfirst($name),$names );
    // echo "<br>Names in Capitalized:</br>";
    // foreach($new_names as $name){
    //     echo $name.",";
    // }

    $nums = [1,2,3,4,5,6,7,8,9];
    $evens = array_map(fn($n) => $n % 2 == 0 ? $n : '*' , $nums);
    $evens_filter = array_filter($nums,fn($n) => $n % 2 == 0);
    echo "<br>Even Numbers :</br>";
    foreach($evens_filter as $num){
        echo $num.",";
    }

    $sum = array_reduce($nums ,function($prev,$curr){
          $prev = $prev + $curr ;
          return $prev;
    },0);
    echo "sum =".$sum ;
?>