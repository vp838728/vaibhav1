<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#">
                  <i class="fa fa-bank" style="font-size:24px"></i>



                </a> 

            

            </div>

            <div class="right-div">
                <a href="login" class="btn btn-danger pull-right">LOGiN</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line text-center">BANK MANGEMNET SYSTEM</h4><br/>
                
             </div>

        </div>
             
            
     <!-- CONTENT-WRAPPER SECTION END-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
					<p>1.with draw amount</p>
					<p>2.Deposit account</p>
                    <p>3view balance<p>
                    <p>4.login</p>
					

            </div>
        </div>

        
    
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-9">
                </div>
                <div class="topnav">

                    <div class="search-container">
                     <form action="" method="post">
                        <input type="text" name="find" required="">
      
      <button type="submit" name="submit" >Submit</button>
    </form>
    <?php
    if(isset($_REQUEST['submit']))
    {
        $var=$_REQUEST['find'];
        if($var=="1")
        {
            echo"<script>
            alert(' with draw amount');
            window.location='withdraw';
            </script>" ;
        }
       
        else if($var=="2")
        {
            echo"<script>
            alert('add deposit');
            window.location='deposit';
            </script>" ;
        }
        else if($var=="3")
        {
            echo"<script>
            alert('view balnce');
            window.location='view.balance';
            </script>" ;
        }
        
        else if($var=="4")
        {
            echo"<script>
            alert('login page');
            window.location='login';
            </script>" ;
        }
        
       /*else($var=="7")
        {
            echo
            "<script>
            alert('close');
            window.location='index';
            </script>";
        }*/
    }
        

        
        ?>
  </div>
</div>



            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>
