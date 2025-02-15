<?php
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    // Split the array into two halves
    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    // Recursively sort both halves
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Merge the sorted halves
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    // Merge two sorted arrays
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Add remaining elements from both halves (if any)
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Example Usage:
$arr = [38, 27, 43, 3, 9, 82, 10];
$sortedArr = mergeSort($arr);

echo "Sorted Array: " . implode(", ", $sortedArr);
?>
