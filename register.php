<?php
include 'db.php';

$name = htmlspecialchars($_POST['name']);
$age = intval($_POST['age']);
$gender = htmlspecialchars($_POST['gender']);
$contact = htmlspecialchars($_POST['contact']);

$sql = "INSERT INTO patients (name, age, gender, contact) 
        VALUES ('$name', $age, '$gender', '$contact')";

if ($conn->query($sql)) {
    echo "Patient registered successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
