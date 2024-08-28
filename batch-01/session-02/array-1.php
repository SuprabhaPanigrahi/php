<?php

    $names = array("Alok","Rabi","Shyam","Hari",10,20,30,true,null);

    $student = array("name"=>"Alok Kumar","age"=>25,"address"=>"BBSR","fees"=>50000);

    echo "Number of elements in the array ".count($names)."<br/>";

    for($i=0;$i<count($names);$i++){
           echo $names[$i]."<br/>";
    }

    foreach($names as $name){
        echo $name."<br/>";
    }

    echo "Name:".$student['name']."<br/>";
    echo "Age:".$student['age']."<br/>";
    echo "Address:".$student['address']."<br/>";
    echo "Fees:".$student['fees']."<br/>";



    $arr2 = [[1,2],[4,5],[7,8]] ;

    echo $arr2[0][0];
    echo $arr2[0][1];


    echo "<br/>Total Number of Elements ".count($arr2);
    echo "<br/>Total Number of Elements in arr2[0] ".count($arr2[0])."<br/>";

    for($i=0;$i<count($arr2);$i++)
    {
        for($j=0;$j<count($arr2[$i]);$j++){
                echo "arr2[$i][$j]=".$arr2[$i][$j]."<br/>";
        }
    }

    foreach($arr2 as $arr){
          foreach($arr as $item){
              echo $item.",";
          }
    }
?>