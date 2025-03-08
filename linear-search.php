<?php
function linearSearch($arr, $target) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $target) {
            return $i; // Return the index where the element is found
        }
    }
    return -1; // Return -1 if the element is not found
}

// Example usage
$arr = [10, 25, 30, 45, 50, 75, 100];
$target = 45;

$result = linearSearch($arr, $target);

if ($result != -1) {
    echo "Element found at index: " . $result;
} else {
    echo "Element not found in the array.";
}
?>
