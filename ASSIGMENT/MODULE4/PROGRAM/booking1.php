<?php

// Handle the booking request
// $bookingType = $_POST['bookingType'];
// $checkInDate = $_POST['checkInDate'];
// $checkOutDate = $_POST['checkOutDate'];
// $slot = $_POST['slot'];

// Perform validation and booking logic here
// ...

// Prepare the response
$response = array('message' => 'Room booked successfully.');

header('Content-Type: application/json');
echo json_encode($response);
?>

