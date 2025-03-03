<?php

// Example 1: argument Pass by Value

function selectionSort($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        // Assume the current index is the minimum
        $minIndex = $i;

        // Find the minimum element in the unsorted part
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Swap the found minimum element with the first element
        if ($minIndex != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
    }
    return $arr;
}

// Example usage:
$arr = [64, 25, 12, 22, 11];
$sortedArr = selectionSort($arr);

echo "Sorted Array: " . implode(", ", $sortedArr);


// Example 1: argument Pass by Reference

function selectionSort(&$arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Swap using list() without a temporary variable
        if ($minIndex != $i) {
            list($arr[$i], $arr[$minIndex]) = array($arr[$minIndex], $arr[$i]);
        }
    }
}

// Example usage:
$arr = [64, 25, 12, 22, 11];
selectionSort($arr);

echo "Sorted Array: " . implode(", ", $arr);

// Key Benefits of &$arr
// Efficient (No extra memory needed for copying).
// Modifies the original array directly.
// No need to return the array and store the result separately.


?>

