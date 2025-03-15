<?php 

// Factorial
function factorial($n) {
    if ($n <= 1) { // Base case
        return 1;
    }
    return $n * factorial($n - 1); // Recursive case
}

echo factorial(5); // Output: 120

// Fibonacci
function fibonacci($n) {
    if ($n <= 0) return 0; // Base case 1
    if ($n == 1) return 1; // Base case 2
    
    return fibonacci($n - 1) + fibonacci($n - 2); // Recursive case
}

echo fibonacci(6); // Output: 8

// Array Sum

function arraySum($arr, $index = 0) {
    if ($index == count($arr)) return 0; // Base case

    return $arr[$index] + arraySum($arr, $index + 1); // Recursive case
}

$arr = [1, 2, 3, 4, 5];
echo arraySum($arr); // Output: 15


