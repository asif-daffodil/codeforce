<?php

function find_smallest_number($x) {
    // If x is greater than 45, it's not possible to create a distinct digit number
    if ($x > 45) {
        return -1;
    }

    $number = '';
    $digit = 9;

    while ($x > 0) {
        // If x is less than the current digit, append it to the number
        if ($x <= $digit) {
            $number .= $x;
            $x = 0;
        } else {
            // Otherwise, append the current digit to the number
            $number .= $digit;
            $x -= $digit;
            $digit--;
        }
    }

    // Reverse the string to get the smallest number
    $number = strrev($number);

    return $number;
}

$testCases = intval(trim(fgets(STDIN)));

for ($t = 0; $t < $testCases; $t++) {
    $x = intval(trim(fgets(STDIN)));
    $result = find_smallest_number($x);
    echo $result . "\n";
}

?>
