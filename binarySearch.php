<?php
function binarySearch(array $arr, int $target): int {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($arr[$mid] == $target) {
            return $mid; // Target found, return index
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1; // Search in the right half
        } else {
            $high = $mid - 1; // Search in the left half
        }
    }

    return -1; // Target not found
}

// Example usage
$sortedArray = [2, 4, 7, 10, 15, 20, 25];
$target = 10;

$result = binarySearch($sortedArray, $target);

if ($result != -1) {
    echo "Element found at index: $result";
} else {
    echo "Element not found in the array.";
}


// Recursive Binary Search


function binarySearchRecursive(array $arr, int $target, int $low, int $high): int {
    if ($low > $high) {
        return -1; // Target not found
    }

    $mid = (int)(($low + $high) / 2);

    if ($arr[$mid] == $target) {
        return $mid;
    } elseif ($arr[$mid] < $target) {
        return binarySearchRecursive($arr, $target, $mid + 1, $high);
    } else {
        return binarySearchRecursive($arr, $target, $low, $mid - 1);
    }
}

// Example usage
$sortedArray = [2, 4, 7, 10, 15, 20, 25];
$target = 15;

$result = binarySearchRecursive($sortedArray, $target, 0, count($sortedArray) - 1);

if ($result != -1) {
    echo "Element found at index: $result";
} else {
    echo "Element not found in the array.";
}








