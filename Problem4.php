<?php
/**
 * Largest Palindrome Product - http://projecteuler.net/problem=4
 *
 * A palindromic number reads the same both ways. The largest palindrome made from
 * the product of two 2-digit numbers is 9009 = 91 × 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

$max = 0;

for ($num1 = 100; $num1 <= 999; $num1++) {
    for ($num2 = 100; $num2 <= 999; $num2++) {
        $product = $num1 * $num2;

        if (isPalindrome($product) && $product > $max) {
            $max = $product;
        }
    }
}

function isPalindrome ($number) {
    return $number == strrev($number);
}

echo $max . PHP_EOL;