<?php

function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function nearlySimilarRectangles($sides) {
    $ratios = [];
    $count = 0;

    foreach ($sides as $rectangle) {
        $a = $rectangle[0];
        $b = $rectangle[1];
        $gcd = gcd($a, $b);
        $reducedRatio = $a / $gcd . ':' . $b / $gcd;

        if (isset($ratios[$reducedRatio])) {
            $count += $ratios[$reducedRatio];
            $ratios[$reducedRatio]++;
        } else {
            $ratios[$reducedRatio] = 1;
        }
    }

    return $count;
}


// Example usage:
$sides = [[5, 10], [10, 10], [3, 6], [9, 9]];
echo nearlySimilarRectangles($sides);
