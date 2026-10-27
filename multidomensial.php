<?php
$students = array(
    array("Rahul", 85,  "BCA"),
    array("Priya", 90,  "BBA"),
    array("Amit",  78,  "BSc")
);

echo "Student Details:<br>";

for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i][0] . ", ";
    echo "Marks: " . $students[$i][1] . ", ";
    echo "Course: " . $students[$i][2] . "<br>";
}
?>