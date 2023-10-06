<?php
$student = array(
    "name" => "John",
    "age" => 20,
    "grade" => "A"
);

echo "Student Name: " . $student["name"] . "<br>";

echo "Student Details: ";
foreach ($student as $key => $value) {
    echo $key . ": " . $value . ", ";
}
?>
