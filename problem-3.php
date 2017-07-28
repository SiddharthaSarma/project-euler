<?php
/*
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */
function square($val)
{
    return pow($val, 2);
}

function largestPrimeFactor($val, $divisor = 2)
{
    $compare = square($divisor) <= $val;
    while (($val % $divisor) != 0 && $compare) {
        $divisor++;
    }

    echo $compare ? largestPrimeFactor($val / $divisor, $divisor) : $val;
}

largestPrimeFactor(600851475143);
?>