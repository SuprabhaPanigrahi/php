<?php
  $arr =[1,2,3,4,5,6,7,8,9];

  // Creating new array from existing array using array() function
  $arr1 = array($arr);
  print_r($arr1);

  // Creating a new array by creating power of 2 for each element in existing array using array_map() function

  // $arr2 = array_map(function($n) {
  //   return pow(2, $n);
  // }, $arr);
  $arr2 = array_map(fn($n) => pow(2, $n), $arr);
  print_r($arr2);

  # Filter out all even numbers from existing array using array_filter() function
  // $arr3 = array_filter($arr, function($n) {
  //   return $n % 2 == 0;
  // });
  $arr3 = array_filter($arr, fn($n)=> $n % 2 == 0);
  print_r($arr3);

  # Find sum of all elements in existing array using array_reduce() function
  // $sum = array_reduce($arr,function ($acc, $current) {
  //   return $acc + $current;
  // }, 0);
  $sum = array_reduce($arr, fn($acc, $n) => $acc + $n, 0);
  print_r($sum);

  #Find maximum element in existing array using array_reduce() function

  $max =array_reduce($arr,function($acc,$current) {
    return ($acc > $current) ? $acc : $current;
  }, $arr[0]);

   echo $max;


  # Sort existing array in descending order using usort() function
  #NOTE : usort() function sorts the array in place and does not return a new array it modifies the existing array`
  $price = [200, 150, 300, 100, 250];
  echo "ORIGINAL PRICE ARRAY : \n";
  echo print_r($price);
  usort($price, function($a, $b) {
    return $a - $b;
  });

  echo "\n";
  echo "SORTED PRICE ARRAY USING usort() FUNCTION : \n";
  print_r($price);
 
# Reverse the existing array using array_reverse() function
  $reversedArr = array_reverse($arr);
  print_r($reversedArr)

 ;


