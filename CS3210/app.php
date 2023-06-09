<?php
function bubbleSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;

                // Display the array after each swap
                echo implode(", ", $arr) . "<br>";
            }
        }
    }

    return $arr;
}

// Test the bubbleSort function
$array = [64, 34, 25, 12, 22, 11, 90];
echo "Original Array: " . implode(", ", $array) . "<br>";
echo "Sorting Steps:<br>";
$sortedArray = bubbleSort($array);
echo "<br>Sorted Array: " . implode(", ", $sortedArray);
?>
