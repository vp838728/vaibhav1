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
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/img2.jpg"/>
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-danger pull-right">LOG ME OUT</a>
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
                <h4 class="header-line">BANK MANGEMNET SYSTEM</h4><br/>
                
             </div>

        </div>
             
            
     <!-- CONTENT-WRAPPER SECTION END-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
					<p>1.Add CUSTOMER ACOOUNT</p>
					<p>2.Search customer</p>
					<p>3.View CUTOMER</p>
					<p>4.VIEW ALL ACOUNT</p>

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
            alert('add customer');
            window.location='addcustomer';
            </script>" ;
        }
       
        
         else if($var=="2")
        {
            echo"<script>
            alert('Search customer');
            window.location='serach_customer';
            </script>";
        }
        else if($var=="3")
        {
            echo"<script>
            alert('view customer');
            window.location='view';
            </script>";
        }
        else if($var=="4")
        {
            echo"<script>
            alert('view all accont');
            window.location='viewall';
            </script>";
        }
        
       
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
