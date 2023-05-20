<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking System</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      border: 2px solid black;
    }
  </style>
</head>
<body>
  <h2 class="text-center">Hotel Booking System</h2>
  <div class="container" id="">
    <div class="form-group">
      <label for="bookingtype">BOOKING TYPE:</label>
      <select id="bookingtype" class="form-select" aria-label="Default select example">
        <option value="fullday">FULLDAY</option>
        <option value="halfday">HALFDAY</option>
        <option value="custom">Custom</option>
      </select>
    </div>
    <div class="form-group" id="bookingDate">
      <label for="checkindate">CHECK IN DATE:</label>
      <input type="date" class="form-control" id="checkindate">
    </div>
    <div class="form-group" id="bookingDate">
      <label for="checkoutdate">CHECK OUT DATE:</label>
      <input type="date" class="form-control" id="checkoutdate">
    </div>
    <div id="bookingSlot" style="display: none;">
      <label for="slot">Slot:</label>
      <select class="form-select" id="slot" aria-label="Default select example">
        <option value="morning">Morning (8AM to 6PM)</option>
        <option value="evening">Evening (7PM to 7AM)</option>
      </select>
    </div>
    <button id="bookbuttonid" class="btn btn-primary my-3">Book Now</button>
    <div id="result"></div>
  </div>
  <script>
    $(document).ready(function(){
      $('#bookingtype').change(function(){
        var bookingtype = $(this).val();
        if (bookingtype == 'halfday') {
          $('#bookingDate').show();
          $('#bookingSlot').show();
        } else {
          $('#bookingDate').show();
          $('#bookingSlot').hide();
        }
      });

      $('#bookbuttonid').click(function(){
        var bookingtype = $('#bookingtype').val();
        var checkindate = $('#checkindate').val();
        var checkoutdate = $('#checkoutdate').val();
        var slot = $('#slot').val();

        var bookingdata = {
          bookingtype: bookingtype,
          checkindate: checkindate,
          checkoutdate: checkoutdate,
          slot: slot
        };

        $.ajax({
          type: 'POST',
          url: 'booking.php',
          data: bookingdata,
          dataType: 'json',
          success: function(response) {
            $('#result').html(response.message);
          },
          error: function() {
            $('#result').html('An error occurred while processing your request.');
          },
        });
      });
    });
  </script>
</body>
</html>
