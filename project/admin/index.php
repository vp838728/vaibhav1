<?php
<<<<<<< HEAD
if(isset($_SESSION['aid']))
{
	echo "
		<script>
		window.location='dashboard';
		</script>
		";
}
=======
include_once('index.php');
>>>>>>> 7e51511af046ad42b9457c0ba2e8a1ee884b9913
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Please Sign In</h3>
                    </div>
                    <div class="panel-body">
<<<<<<< HEAD
                        <form  action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="anm" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="apass" type="password" >
=======
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="anm" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="apass" type="password" value="">
>>>>>>> 7e51511af046ad42b9457c0ba2e8a1ee884b9913
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group">
<<<<<<< HEAD
                                    <input type="submit" name="submit" value="login" class="btn btn-lg btn-success btn-block">
=======
                                    <input type="submit" name="login" class="btn btn-lg btn-success btn-block">
>>>>>>> 7e51511af046ad42b9457c0ba2e8a1ee884b9913
                                </div>
                                 <!-- <a href="index.php" class="btn btn-lg btn-success btn-block">Login</a>  -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
