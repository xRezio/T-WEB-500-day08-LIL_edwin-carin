<?php
function calc_average(array $numbers) {
    if (empty($numbers)) {
        return null;
    }

    $total = array_sum($numbers);
    $count = count($numbers);

    $average = round($total / $count, 1); 
    return $average;
}

var_dump(calc_average([1, 4, 28, 12, 3, 4, 4, 27]));
?>
