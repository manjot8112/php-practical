<html>
<head>
    <title>Employee Details</title>
</head>
<body>

<h2>Employee Details Form</h2>

<form method="post">
    Employee Name:
    <input type="text" name="ename" required><br><br>

    Employee ID:
    <input type="text" name="eid" required><br><br>

    Department:
    <input type="text" name="dept" required><br><br>

    Salary:
    <input type="number" name="salary" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    echo "<h2>Employee Details</h2>";

    echo "Employee Name: " .
        htmlspecialchars($_POST['ename']) . "<br>";

    echo "Employee ID: " .
        htmlspecialchars($_POST['eid']) . "<br>";

    echo "Department: " .
        htmlspecialchars($_POST['dept']) . "<br>";

    echo "Salary: " .
        htmlspecialchars($_POST['salary']) . "<br>";
}
?>

</body>
</html>