
<?php
class Student
{
    // Properties
    public $name;
    public $rollno;
    public $marks;

    // Constructor
    public function __construct($name, $rollno, $marks)
    {
        $this->name = $name;
        $this->rollno = $rollno;
        $this->marks = $marks;
    }

    // Method
    public function display()
    {
        echo "Student Name: " . $this->name . "<br>";
        echo "Roll Number: " . $this->rollno . "<br>";
        echo "Marks: " . $this->marks . "<br>";
    }
}

// Creating an object
$s1 = new Student("Rahul", 101, 85);

// Calling the method
$s1->display();
?>