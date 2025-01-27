<?php

// Write a program to print all prime numbers between 1 and 20.

for ($num = 2; $num <= 20; $num++) {
    $isPrime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $num . " ";
    }
}

// Write a program to check if a number is prime.

function isPrime($num) {
    if ($num <= 1) {
        return false; // Numbers <= 1 are not prime
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Divisible by a number other than 1 and itself
        }
    }
    return true; // No divisors found, so it's prime
}

// Example Usage
$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}





