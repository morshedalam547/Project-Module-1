<?php

define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter temperature value: ";
$temperature = (float) readline();

echo "Convert to (1: Fahrenheit, 2: Celsius): ";
$choice = (int) readline();




if ($choice === 1) {
    $result = $temperature * FACTOR + OFFSET; 
    echo "Temperature in Fahrenheit: $result\n"; 
} elseif ($choice === 2) {
    $result = ($temperature - OFFSET) / FACTOR; 
    echo "Temperature in Celsius: $result\n"; 
} else {
    echo "Invalid choice!\n"; 
}
