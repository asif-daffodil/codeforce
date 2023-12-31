<?php

$testCases = intval(trim(fgets(STDIN)));

for ($t = 1; $t <= $testCases; $t++) {
    $r = floatval(trim(fgets(STDIN))); // radius of the circle

    // Calculate the area of the square
    $area_square = pow(2 * $r, 2);

    // Calculate the area of the circle
    $area_circle = M_PI * pow($r, 2);

    // Calculate the area of the shaded region
    $shaded_area = $area_square - $area_circle;

    // Add a small value to avoid precision problems
    $shaded_area += 1e-9;

    // Use printf to format the output with 2 decimal places
    printf("Case %d: %.2f\n", $t, $shaded_area);
}

?>
