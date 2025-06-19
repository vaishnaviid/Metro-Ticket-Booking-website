<?php
$host = 'localhost';
$db = 'metro';
$user = 'root';
$pass = ''; // use your actual password
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$name = $_POST['name'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$tickets = $_POST['tickets'];

$sql = \"INSERT INTO bookings (name, source, destination, tickets) VALUES (?, ?, ?, ?)\";
$stmt = $conn->prepare($sql);
$stmt->bind_param(\"sssi\", $name, $source, $destination, $tickets);
if ($stmt->execute()) {
    echo \"<h2>Booking Successful!</h2>\";
} else {
    echo \"<h2>Error: \" . $stmt->error . \"</h2>\";
}
$stmt->close();
$conn->close();
?>
