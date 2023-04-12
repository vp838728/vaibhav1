<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
<div class="container mt-3 col-md-6" >
  <h2>FIND THE LEAP YEAR PROGRAM</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="start_year" placeholder="Enter start_year" >
    </div>
    <div class="mb-3">
      <label for="text">Password:</label>
      <input type="text" class="form-control" name="end_year" placeholder="Enter end year" >
    </div>
    
    <button type="submit"  name="submit"class="btn btn-primary">Submit</button>
  </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
$start_year=1901;
$end_year=2016;
function check_leap_year($start_year,$end_year)
{

}

for ($year = 1901; $year <= 2016; $year++) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo $year . " is a leap year.\n";
            } else {
                echo $year . " is not a leap year.\n";
            }
        } else {
            echo $year . " is a leap year.\n";
        }
    } else {
        echo $year . " is not a leap year.\n";
    }
}
?>
