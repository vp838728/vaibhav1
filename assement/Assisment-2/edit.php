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

</form>
    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2 class="text-center">  Add EMPLOYEE </h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="" method="post">
                                       
                                       

                                       <div class="form-group">
                                           <label>FIRST NAME::</label>
                                           <input type="text" name="name" class="form-control"value="<?php echo $fetch->name?>" placeholder="first name">
                                       </div>
                                       <div class="form-group">
                                           <label>LAST NAME::</label>
                                           <input type="text" name="lname" class="form-control" value="<?php echo $fetch->lname?>" placeholder="last name">
                                       </div>
                                       <div class="form-group">
                                           <label>EMAIL:</label>
                                           <input type="text" name="email" class="form-control"value="<?php echo $fetch->email?> placeholder="email">
                                       </div>
                                       
                                    

                                    <div class="form-group">
                                        <label>PHONE</label>
                                        <input type="number" name="phone" class="form-control"value="<?php echo $fetch->phone?> placeholder="enter phone">
                                    </div>
                                    
                                       <div class="form-group">
                                            <label>Address:</label>
                                            <textarea class="form-control" rows="3"name="Address" value="<?php echo $fetch->Address?>"></textarea>
                                        </div>

                                     
                                      <div class="form-group">
                                        <?php
                                        $gen=$fetch->gen
                                        ?>
                                              <label>  gen:</label>
                                               <input type="radio" name="gen"  value="male"<?php
                                               if($gen=="male")
                                               {
                                                echo"checked"
                                               }?>>Male
                                            <input type="radio" name="gen"  value="female"<?php
                                            if($gen=="female")
                                            {
                                                echo"checked"
                                            }?>>female
                                      </div>
                                      
                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <input type="number" name="password" class="form-control"value="<?php echo $fetch->password?>" placeholder="enter phone">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>CPASSWORD</label>
                                        <input type="number" name="cpassword" class="form-control"value="<?php echo $fetch->cpassword?>" placeholder="enter phone">
                                    </div>

                                       
                                       <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                      
                                   </form>

                                </div>
                               
                            </div>
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