<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hotel booking system
  </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
 .contiaer{
  border:2px solid black;

 }

  </style>

</head>
<body>
  <h2 class="text-center">hotel booking system</h2>
  <div class="contiaer">
  <div class="form-group">
    <label for="bookingtype">BOOKING TYPE:</label>
    <SELect id="bookingtype" class="form-select" aria-label="Default select example">
      <option value="fullday">FULLDAY</option>
      <option value="halfday">HALFDAY</option>
      <option value="custom">custom</option>
    </SELect>
  </div>
  <div class="form-group" id="bookingDate">
    <label for="check-indate">CHECK IN DATE</label>
    <input type="date" class="form-control"id="checkindate"></br>
    
  </div>
  <div class="form-group" id="bookingDate">
  <label for="check-outdate">CHECK OUT DATE</LABEL>
    <input type="date" class="form-control" id="checkoutdate">
  </div>
  <div id="bookingSlot" style="display: none;">
        <label for="slot">Slot:</label>
        <select class="form-select"id="slot"aria-label="Default select example">
            <option value="morning">Morning (8AM to 6PM)</option>
            <option value="evening">Evening (7PM to 7AM)</option>
        </select>
    </div>
    <button id="bookbuutonid" class="btn btn-primary my-3">book now </button>
    <div id="result"></div>
</div>
<script>
  $(document).ready(function(){
  $('#bookingtype').change(function(){
    var bookingtype =$(this).val();
    if(bookingtype=='halfday'){
      $('#bookingDate').show();
      $('#bookingSlot').show();
    }else{
      $('#bookingDate').show();
      $('#bookingSlot').hide()
    }
    

  })
  $('#bookbuutonid').click(function(){
    var bookingtype=$('#bookingtype').val();
    var checkindate=$('#checkoutdate').val();
    var checkoutdate=$('#checkoutdate').val();
    var slot=$('#slot').val();
  var bookingdata ={
    bookingtype:bookingtype,
    checkindate:checkindate,
    checkoutdate:checkoutdate,
    slot:slot
  };
  $.ajax({
    type:'POST',
    url:'boooking.php',
    data:bookingdata,
    datatype:'json',
    success:function(responce){
      $('#result').html(responce.message);
    },
    error:function(){
      $('#result').html('An error occurred while processing your request.');

    },

  });
  });
});

  </script>
</body>
</html>