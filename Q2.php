<?php

$numbers = [3, 5, 7, 2, 8, -1, 4, 10, 12];


$minValue = $numbers[0];
$maxValue = $numbers[0];


foreach ($numbers as $number) {
  
    if ($number < $minValue) {
        $minValue = $number;
    }

    if ($number > $maxValue) {
        $maxValue = $number;
    }
}


echo "Minimum value: " . $minValue . "\n";
echo "Maximum value: " . $maxValue . "\n";
?>
