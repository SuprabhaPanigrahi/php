<?php
 function pow1($base, $exponent) {
     return $base ** $exponent;
 }

 function sqrt1($number) {
     return $number ** 0.5;
 }
 function factorial($number) {
     if ($number < 0) {
         return null; // Factorial is not defined for negative numbers
     }
     if ($number === 0 || $number === 1) {
         return 1;
     }
     $result = 1;
     for ($i = 2; $i <= $number; $i++) {
         $result *= $i;
     }
     return $result;
 }  

 function UpperCase($string) {
     return strtoupper($string);
 }

 function validateEmail($email) {
     return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
 }