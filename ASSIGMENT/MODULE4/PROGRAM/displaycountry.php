<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
</head>
<body>
    <form method="post">
    <div class="container">
    <h2 class="text-center"> DISPLAY DATA COUNTRY DATA USING AJAX</h2>
    <select id="cid"class="form-select" aria-label="Default select example">
  <option selected>---select country</option>
  <?php
  foreach($country_arr as $data)
  {
    ?>
  <option value="<?php echo $data->cid?>"><?php echo $data->cname;?></option>
  <?php
  }
  ?>
  
</select>
</div>
</form>
</body>
</html>
