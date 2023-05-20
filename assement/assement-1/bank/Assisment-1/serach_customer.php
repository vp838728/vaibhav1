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
            <div class="navbar-header ">
				
				<h2 class="text-center">Search customer</h2>
            </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                </a>

            </div>

            <div class="right-div">
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
               <form action="" method="post" enctype="multipart/form-data">
			<select name="user_id" class="form-control" required="">
				<option>----- Select By Id -----</option>
				<?php
				foreach($user_arr as $data)
				{
				?>
				<option value="<?php echo $data->user_ID ?>"><?php echo $data->user_ID?></option>
				<?php	
				}
				?>
			</select>	
			
			<input type="submit" name="submit" value="search" class="btn btn-primary" >
			</br>
			</br>


            <select name="name" class="form-control" required="">
				<option>----- Select By Name-----</option>
				<?php
				foreach($user_arr as $data)
				{
				?>
				<option value="<?php echo $data->user_ID ?>"><?php echo $data->name?></option>
				<?php	
				}
				?>
			</select>
				
			
			<input type="submit" name="submit" value="search" class="btn btn-primary" >
		</form>

		<div class="row why-grids">	
		
			<?php
			 if(isset($_REQUEST['submit']))
			 {
				 $search=$_REQUEST['user_id'];
				 $user_arr=$this->select_search('useraccount','user_id ',$search);
			 if($user_arr){
				foreach($user_arr as $data)
				{
			?>	
						
			<table width="100%">
            <tr>
					<td>user_id: <?php echo $data->user_ID ?></td>
				</tr>
				<tr>
					<td>email: <?php echo $data->email?></td>
                    
				</tr>
				<tr>
					<td >accountno: <?php echo $data->accountno?></td>
				</tr>
				<tr>
					<td>phone: <?php echo $data->phone?></td>
				</tr>
				<tr>
					<td>price: <?php echo $data->accounttype?></td>
				</tr>
<!-- 				 -->
				
				<tr>
					<td colspan="3">-----------------------------------------------------------------------------------------------------------------------</td>
				</tr>
				</table>
			
			
			<?php	
				}} else
				{
					echo "done
					// <script>
					// alert('Sorry.. account not  not avialble');
					// window.location='serach_customer';
					// </script>
					";
				}
			}
			?>
		</div>
	</div>
</section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12">
               
    </div>
    </div>
    
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
