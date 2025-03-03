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
?>

