<?php
$n = 10;
$i = 1;
$sum = 0;

while ($i <= $n) {
    $sum = $sum + $i;
    $i++;
}

echo "Sum of first $n natural numbers is: " . $sum;
?>