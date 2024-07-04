<?php
// Define the three numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Check if $num1 is greater than or equal to both $num2 and $num3
if ($num1 >= $num2 && $num1 >= $num3) {
  // If true, $num1 is the largest
  $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
  // Otherwise, check if $num2 is greater than or equal to both $num1 and $num3
  // If true, $num2 is the largest
  $largest = $num2;
} else {
  // If neither of the above conditions are true, $num3 must be the largest
  $largest = $num3;
}

// Output the largest number
echo "The largest number among {$num1}, {$num2}, and {$num3} is {$largest}.";
