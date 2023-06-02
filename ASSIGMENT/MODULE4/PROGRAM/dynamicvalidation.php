<!DOCTYPE html>
<html>
<head>
  <title>Custom Required Field Validator</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Custom required field validator
      function validateRequiredField(fieldId) {
        var fieldValue = $(fieldId).val();
        if (fieldValue.trim() === '') {
          $(fieldId).addClass('error');
          return false;
        } else {
          $(fieldId).removeClass('error');
          return true;
        }
      }
      
      // Validate form on submit
      $('form').submit(function(event) {
        var isValid = true;
        
        // Check each required field
        $('#name').each(function() {
          if (!validateRequiredField(this)) {
            isValid = false;
          }
        });
        $('#email').each(function() {
          if (!validateRequiredField(this)) {
            isValid = false;
          }
        });
        
        // Prevent form submission if validation fails
        if (!isValid) {
          event.preventDefault();
        }
      });
    });
  </script>
  <style>
    .error {
      border: 1px solid red;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>
<body>
  <h1>Custom Required Field Validator Example</h1>
  
  <form id="forms">
    <label for="name">Name:</label>
    <input type="text" id="name"  class="form-control">
    
    <label for="email">Email:</label>
    <input type="email" id="email" class="form-control">
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>
