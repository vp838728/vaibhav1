<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Delish Food a Hotels and Restaurants Category Flat Bootstrap responsive Website Template | Home :: w3layouts
	</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Delish Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

	<link href="{{url('website/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('website/css/font-awesome.css')}}" rel="stylesheet">
	
	<link href="{{url('website/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('website/css/style2.css')}}" rel="stylesheet" type="text/css" media="all" />

	




	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
</head>

<body>
	
<?php
        function active($currect_page){
            $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
            $url = end($url_array);  
            if($currect_page == $url){
                echo 'active'; //class name in css 
            } 
        }
    ?>
	<div class="banner inner-bg-w3" id="home">
		<!-- header -->
		
		

		<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a
							href="mailto:info@example.com">INFO@EXAMPLE.COM</a></li>
					@if(session()->get('userid'))
					<li><a href="{{url('/profile')}}"class="btn btn-primary">{{session('name')}}</a></li>	
					<li><a href="{{url('/logout')}}"class="btn btn-primary">logout</a></li>
					@else
					<li><a href="{{url('/login')}}"class="btn btn-primary">login</a></li>
					<li><a href="{{url('/signin')}}"class="btn btn-primary">signin</a></li>
					@endif
					
						
	
					<li><i class="fa fa-phone" aria-hidden="true"></i>+1 (100)222-23-33</li>
					<li>
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
									aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder="Search..." required="" />
									<input type="submit" value="Send" />
								</form>
							</div>
						</div>
					</li>
				</ul>

			</div>
			<div class="clearfix"></div>
		</div>
		

		<header>
			<div class="container">

				<!-- navigation -->
				<div class="w3_navigation">
					<nav class="navbar navbar-default">
						<div class="navbar-header navbar-left">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="w3_navigation_pos">
								<h1><a href="{{url('index')}}"><span>D</span>elish <span>F</span>ood</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
							<nav class="menu menu--miranda">
								<ul class="nav navbar-nav menu__list">
									<li class="menu__item"><a href="{{url('/index')}}" class="menu__link<?php active('index');?>">Home</a></li>
									<li class="menu__item"><a href="{{url('/about')}}" class=" menu__link<?php active('about');?>">About</a></li>
									<li class="menu__item"><a href="{{url('/services')}}"
											class=" menu__link<?php active('/services');?>">Services</a></li>
									<li class="menu__item"><a href="{{url('/gallery')}}" class=" menu__link<?php active('gallery');?>">Gallery</a>
									</li>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown"
											role="button" aria-haspopup="true" aria-expanded="false">Pages<span
												class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="{{url('/menu')}}">FOOD MENU</a></li>

											<li><a href="{{url('/icons')}}">Icons</a></li>
										</ul>
									</li>
									<li class="menu__item menu__item--current"><a href="{{url('/contact')}}"
											class=" menu__link">Contact</a></li>
								</ul>
							</nav>
						</div>
					</nav>
				</div>
				<!-- <div class="clearfix"></div> -->
				<!-- //navigation -->
			</div>
		</header>
		<!-- //header -->
	</div>