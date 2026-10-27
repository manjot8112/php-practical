<?php
function area($length, $breadth) {
    $result = $length * $breadth;
    return $result;
}

$l = 10;
$b = 5;

$area = area($l, $b);

echo "Length = $l <br>";
echo "Breadth = $b <br>";
echo "Area of Rectangle = " . $area;
?>