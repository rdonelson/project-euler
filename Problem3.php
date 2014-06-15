<?php
/**
 * Largest Prime Factor - http://projecteuler.net/problem=3
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of the number 600851475143 ?
 */

$num = 600851475143;

$start = ceil(sqrt($num));

$start = $start % 2 == 0 ? $start + 1 : $start;

for ($i = $start; $i > 0; $i = $i - 2) {
    if (($num % $i) == 0) {

        if (isPrime($i)) {
            $result = $i;
            break;
        }
    }
}

function isPrime ($num)
{
    if($num == 1) {
        return false;
    }

    if($num == 2) {
        return true;
    }

    if($num % 2 == 0) {
        return false;
    }

    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0) {
            return false;
        }
    }

    return true;

}

echo $result . PHP_EOL;