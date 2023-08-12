<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{url('admin/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{url('admin/css/style.css')}}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="{{url('admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href="{{url('admin/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="{{url('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{url('admin/js/modernizr.custom.js')}}"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="{{url('admin/js/metisMenu.min.js')}}"></script>
<script src="{{url('admin/js/custom.js')}}"></script>
<link href="{{url('admin/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->

</head> 

<div class="container col-md-12 ">
        @if (Session('fail'))
        <div class="alert alert-danger">
            <ul>
                <li>{{Session('fail') }}</li>
            </ul>
        </div>
        @endif
		@if (Session('SUCESSS'))
        <div class="alert alert-success">
            <ul>
                <li>{{Session('SUCESSS') }}</li>
            </ul>
        </div>
        @endif
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="{{url('admin_login_auth')}}" method="post">
							@csrf
							<input type="text"  class=" form-control"name="anm" placeholder="Enter Your Email" required="">
							<br>
							<input type="password" name="apss" class="form-control" placeholder="Password" required="">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="Sign In" value="Sign In">
							
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
		
	</div>
	
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="{{url('admin/js/jquery.nicescroll.js')}}"></script>
	<script src="{{url('admin/js/scripts.js')}}"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>