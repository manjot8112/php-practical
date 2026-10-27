<?php
$students = array(
    "Rahul" => 85,
    "Priya" => 90,
    "Amit"  => 78,
    "Sneha" => 95
);

foreach ($students as $name => $marks) {
    echo "Student Name: " . $name . " - Marks: " . $marks . "<br>";
}
?>