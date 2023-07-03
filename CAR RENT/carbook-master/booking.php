<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min2.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style3.css" />
	
	<link href="css/bvalidator.css" type="text/css" rel="stylesheet" />

  
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<title>car rent</title>
	
		<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
	
	<script src="js/jquery.bvalidator.js" type="text/javascript"></script>
	<link href="css/bvalidator.css" type="text/css" rel="stylesheet" />

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form1').bValidator();
    });
    

	</script>  
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<!-- <h1>Book a car</h1> -->
						</div>
						<form method="post" action="" id="form1">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name="name" data-bvalidtor="required,alpha"
											placeholder="Enter your name"data-bvalidator="required,alpha">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" name="email"
											placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="number" name="moblie"
									placeholder="Enter your phone number">
							</div>
							<div class="from-group">
								<input name="adv_id" type="hidden" value="<?php echo $_REQUEST['book_id'];?>"
									class="form-control" require="">
							</div>

							<div class="form-group">
								<span class="form-label">Pickup Location</span>
								<input class="form-control" type="text" name="PICKUPLOCATION"
									placeholder="Enter ZIP/Location">
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								<input class="form-control" type="text" name="DESTINATION"
									placeholder="Enter ZIP/Location">
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">STATE</span>
										<input class="form-control" type="text" name="STATE"
											placeholder="Enter your STATE">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">CITY</span>
										<input class="form-control" type="text" name="city"
											placeholder="Enter your CITY">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									
								</div>
								<div class="form-btn">
									<input type="submit" name="submit" class="submit-btn">
									<!-- <button class="submit-btn">Book Now</button> -->
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <script src="js/jquery.bvalidator.js" type="text/javascript"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>