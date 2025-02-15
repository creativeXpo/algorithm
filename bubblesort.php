<?php
function bubbleSort($arr) {
    $n = count($arr);
    do {
        $swapped = false;
        for ($i = 0; $i < $n - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                // Swap elements
                [$arr[$i], $arr[$i + 1]] = [$arr[$i + 1], $arr[$i]];
                $swapped = true;
            }
        }
    } while ($swapped); // Repeat until no swaps are needed
    
    return $arr;
}

// Example usage:
$arr = [64, 34, 25, 12, 22, 11, 90];
$sortedArr = bubbleSort($arr);
echo "Sorted array: " . implode(", ", $sortedArr);
?>
