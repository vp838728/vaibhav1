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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
  <style>
    .container{
        border:2px solid black;
        margin-top:35px;

    }
    .heder:hover{
      color:red;
    }
    .heder{
        text-align:center;
    }
    

    </style>
</head>

<body>
  <form method="post" action="">
    <div class="container">
      <h2 class="text-center"> DISPLAY DATA COUNTRY DATA USING AJAX</h2>
      <select id="cid" name="cid" onchange="getstate(this.value)"class="form-select" aria-label="Default select example">
        <option selected>---select country</option>
        <?php
  foreach($country_arr as $data)
  {
    ?>
        <option value="<?php echo $data->cid?>">
          <?php echo $data->cname;?>
        </option>
        <?php
  }
  ?>

      </select>
</br>
      <select id="sid" name="sid" class="form-select" aria-label="Default select example">
        <option selected>---select state</option>
    

      </select>
</br>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary">
      </div>
    </div>
  </form>
  <script>
  
  function getstate(sid)
  {
    $.ajax
    ({
      type:"POST",
      url:"statedata",
      data:"btn="+ sid,
      success:function(data)
      {
        $('#sid').html(data);
      }
    });
  }
  // function getcity(ccid)
  // {
  //   $.ajax
  //   ({
  //     type:"POST",
  //     url:"citydata",
  //     data:"btn="+ ccid,
  //     success:function(data)
  //     {
  //       $('#ccid').html(data);
  //     }
  //   });
  // }
  </script>
</body>


</html>