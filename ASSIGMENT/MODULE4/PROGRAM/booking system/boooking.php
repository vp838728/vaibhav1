<?php
$bookingtype=$_POST['bookingtype'];
$checkoutdate=$_POST['checkoutdate'];
$checkindate=$_POST['checkindate'];
$slot=$_POST['slot'];
$responce = array('message' => 'Room booked successfully.');

header('Content-Type: application/json');
echo json_encode($response);
?>
