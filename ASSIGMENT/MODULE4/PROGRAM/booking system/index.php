<!DOCTYPE html>
<html>
<head>
    <title>Hotel Room Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Hotel Room Booking System</h1>
    <div id="booking-form">
        <label>Booking Type:</label>
        <select id="booking-type" class="form-control">
            <option value="full-day">Full Day</option>
            <option value="half-day">Half Day</option>
            <option value="custom">Custom</option>
        </select>
        <br>
        <label>Check-in Date:</label>
        <input type="date" id="checkin-date"class="form-control">
        <br>
        <label>Check-out Date:</label>
        <input type="date" id="checkout-date"class="form-control">
        <br>
        <label id="slot-label" style="display: none;">Slot:</label>
        <select id="slot" class="form-control" style="display: none;">
            <option value="morning">Morning (8AM to 6PM)</option>
            <option value="evening">Evening (7PM to Morning 7AM)</option>
        </select>
        <br>
        <button id="submit-button" class="btn btn-primary">Book Room</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
