<?php
// Declare an array
$arr = array(45, 12, 78, 23, 9);

// Display the original array
echo "Original Array: ";
print_r($arr);

// Sort in ascending order
sort($arr);
echo "<br>Ascending Order: ";
print_r($arr);

// Sort in descending order
rsort($arr);
echo "<br>Descending Order: ";
print_r($arr);
?>