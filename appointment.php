<?php
include 'db.php';

$patient_id = intval($_POST['patient_id']);
$doctor = htmlspecialchars($_POST['doctor_name']);
$date = $_POST['appointment_date'];
$time = $_POST['appointment_time'];

$sql = "INSERT INTO appointments (patient_id, doctor_name, appointment_date, appointment_time, status)
        VALUES ($patient_id, '$doctor', '$date', '$time', 'Scheduled')";

if ($conn->query($sql)) {
    echo "Appointment booked!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
