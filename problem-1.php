<?php

/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.
*/
function getSumInTheRange($lowerValue = 1, $higherValue = 1000)
{
    $sum = 0;
    foreach (range($lowerValue, $higherValue - 1) as $number) {
        if ($number % 3 === 0 || $number % 5 === 0) {
            $sum += $number;
        }
    }
    return $sum;
}

echo getSumInTheRange();
