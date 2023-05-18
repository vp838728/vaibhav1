<!DOCTYPE html>
<html>
<head>
    <title>Hotel Room Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
 .container{
  border:2px solid black;

 }

  </style>
</head> 

<body>
    <div class="container">
    <h1 class="text-center">Hotel Room Booking System</h1>

    <label for="bookingType">Booking Type:</label>
    <select class="form-select"id="bookingType"aria-label="Default select example">
        <option value="fullDay">Full Day</option>
        <option value="halfDay">Half Day</option>
        <option value="custom">Custom</option>
    </select>

    <div id="bookingDate">
        <label for="checkInDate">Check-in Date:</label>
        <input type="date" class="form-control" id="checkInDate">
        <label for="checkOutDate">Check-out Date:</label>
        <input type="date"class="form-control" id="checkOutDate">
    </div>

    <div id="bookingSlot" style="display: none;">
        <label for="slot">Slot:</label>
        <select class="form-select"id="slot"aria-label="Default select example">
            <option value="morning">Morning (8AM to 6PM)</option>
            <option value="evening">Evening (7PM to 7AM)</option>
        </select>
    </div>
    <button id="bookButton"class="btn btn-primary my-3">Book</button>

</div>


    <div id="result"></div>
    <script>
        $(document).ready(function() {
    $('#bookingType').change(function() {
        var bookingType = $(this).val();

        if (bookingType === 'halfDay') {
            $('#bookingDate').show();
            $('#bookingSlot').show();
        } else {
            $('#bookingDate').show();
            $('#bookingSlot').hide();
        }
    });

    $('#bookButton').click(function() {
        var bookingType = $('#bookingType').val();
        var checkInDate = $('#checkInDate').val();
        var checkOutDate = $('#checkOutDate').val();
        var slot = $('#slot').val();

        var bookingData = {
            bookingType: bookingType,
            checkInDate: checkInDate,
            checkOutDate: checkOutDate,
            slot: slot
        };

        $.ajax({
            type: 'POST',
            url: 'booking1.php', // Replace with your server-side script to handle the booking
            data: bookingData,
            dataType: 'json',
            success: function(response) {
                $('#result').html(response.message);
               

            },
            error: function() {
                $('#result').html('An error occurred while processing your request.');
            }
        });
    });
});


        </script>
</body>
</html>
