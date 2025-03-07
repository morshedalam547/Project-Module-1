<?php


 echo "Enter units consumed: ";
$units = (int) readline();

if ($units <= 100) {
    // $5 per unit for the first 100 units
    $bill = $units * 5;
} elseif ($units <= 200) {
    // $10 per unit for units 101–200
    $bill = (100 * 5) + ($units - 100) * 10;
} else {
    // $15 per unit for units above 200
    $bill = (100 * 5) + (100 * 10) + ($units - 200) * 15;
}

echo "Total bill: $$bill\n";
