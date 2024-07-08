<?php
// Three defined numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Checking if $num1 is greater than or equal to both $num2 and $num3
if ($num1 >= $num2 && $num1 >= $num3) {
  $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {

  // Checking if $num2 is greater than or equal to both $num1 and $num3
  $largest = $num2;
} else {
  $largest = $num3;
}

// Output
echo "The largest number among {$num1}, {$num2}, and {$num3} is {$largest}.";
