<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>

<script src="jquery.bvalidator.js" type="text/javascript"></script>
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
<link href="bvalidator.css" type="text/css" rel="stylesheet" />

<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form1').bValidator();
       
    });
	</script> 
<script>
    </script>
</head>

<body>
    <form action="" id="form1" method="post">
        <div class="container col-md-8">
            <h2 class="heder">custom validation using jquery</h2>
        <div class="form-group">
            <label>first name:</label>
            <input type="text" name="name" class="form-control"  data-bvalidator="required,alpha" placeholder="enter first name">
        </div>
        <div class="form-group">
            <label>last name:</label>
            <input type="text" name="lname" class="form-control" data-bvalidator="required,alpha" placeholder="enter first name">
        </div>
        <div class="form-group">
            <label>password:</label>
            <input type="password" name="pass" id="pass"class="form-control" data-bvalidator="required,minlength[2],maxlength[12]"placeholder="enter your password">
        </div>
        <div class="form-group">
            <label>cpassword:</label>
            <input type="password" name="cpass" class="form-control" data-bvalidator="required,equalto[pass]" placeholder="enter your cpassword">
        </div>
        
        

        <input type="submit" name="submit"  class="btn btn-primary my-3 ">
</div>
    </form>
</body>
</html>