<?php
// Defined temperature
$celsius = 32;

// Using Celsius to Fahrenheit conversion formula: F = (C * 9/5) + 32
$fahrenheit = ($celsius * 9 / 5) + 32;

// Fahrenheit with 2 decimal points
printf("The temperature %.2f degrees Celsius is %.2f degrees Fahrenheit.", $celsius, $fahrenheit);
