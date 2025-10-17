<?php

  function sum(...$numbers) {
      echo gettype($numbers);
      echo "\n";
      echo "Number of arguments: " . count($numbers) . "\n";
      $total = 0;
      foreach ($numbers as $number) {
          $total += $number;
      }
      return $total;
  }

  echo "Sum: " . sum(1, 2, 3, 4, 5) . "\n"; // Outputs: Sum: 15
  echo "Sum: " . sum(10, 20) . "\n";       // Outputs: Sum: 30
  echo "Sum: " . sum() . "\n";             // Outputs: Sum: