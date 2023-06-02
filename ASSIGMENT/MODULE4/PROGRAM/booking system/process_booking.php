<?php
// Retrieve booking data from AJAX request
$bookingType = $_POST['bookingType'];
$checkinDate = $_POST['checkinDate'];
$slot = $_POST['slot'];

// echo $bookingType;
// echo $checkinDate;
// echo $slot;
// exit;

// Perform server-side validation
if (empty($checkinDate)) {
    echo 'error';
    exit;
}

// Store the booking details in the database (you'll need to configure your MySQL connection)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo 'error';
    exit;
}

$sql = "INSERT INTO bookings (booking_type, checkin_date, slot) VALUES ('$bookingType', '$checkinDate', '$slot')";
// echo $sql;
// exit;

if ($conn->query($sql) === TRUE) {
    echo 'success';
} else {
    echo 'error';
}

$conn->close();
?>
