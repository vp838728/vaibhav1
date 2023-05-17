<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="continer col-md-6">
    <form action="#" method="post" enctype="multipart/form-data">
        <h1 class="text-center"> Rgister form</h1>
        <div class="form-group">
            <label>first name:</label>
            <input type="text" name="fname" value="<?php echo $fetch->fname;?>" class="form-control" placeholder="enter your name">
        </div>
        <div class="form-group">
            <label>last name:</label>
            <input type="text" name="lname" class="form-control" value="<?php echo $fetch->lname;?>" placeholder="enter your last name">
        </div>
        
        
        <div class="form-group">
            <textarea name="address" cols="72" rows="7" class="form-control"placeholder="enter your address"><?php echo $fetch->address;?></textarea>
        </div>
         </br>
        <div class="form-group">
        <img src="file/user1/<?php echo $fetch->file;?>"width="177px" alt="images" height="112px">

            <input type="file" name="file" class="form-control" >
        </div>
       <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" value="<?php echo $fetch->email;?>" placeholder="enter your email">
       </div>
       <div class="form-group">
        <?php 
        $gen=$fetch->gen;
        ?>
        <input type="radio" name="gen" value="male"<?php
        if($gen=="male")
        {
            echo "checked";
        }?>>male
        <input type="radio" name="gen" value="female"<?php
        if($gen=="female")
        {
            echo "checked";
        }?>>female
       </div>

       <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary">
       </div>
</form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
