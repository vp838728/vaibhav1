<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{url('admin/image/png')}}" sizes="16x16" href="{{url('admin//favicon')}}">
    <link rel="stylesheet" href="{{url('admin/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{url('admin/vendor/chartist/css/chartist.min.css')}}">
	<!-- Summernote -->
    <link href="{{url('admin/vendor/summernote/summernote.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/skin-2.css')}}">
    <link rel="stylesheet" href="{{url('admin/css/skin.css')}}">

    <link rel="stylesheet" href="{{url('admin/css/skin-3.css')}}">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{url('admin//logo-white-3')}}" alt="">
                <img class="logo-compact" src="{{url('admin//logo-text-white')}}" alt="">
                <img class="brand-title" src="{{url('admin//logo-text-white')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{url('admin//profile/education/pic1')}}" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="{{url('page-login')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/index')}}">Dashboard 1</a></li>
                            <li><a href="{{url('/index-2')}}">Dashboard 2</a></li>
                            <li><a href="{{url('/index-3')}}">Dashboard 3</a></li>
                        </ul>
                    </li>
					<li><a class="ai-icon" href="event-management.html" aria-expanded="false">
							<i class="la la-calendar"></i>
							<span class="nav-text">Event Management</span>
						</a>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Professors</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/all-professors')}}">All Professor</a></li>
                            <li><a href="{{url('/add-professor')}}">Add Professor</a></li>
                            <li><a href="{{url('/edit-professor')}}">Edit Professor</a></li>
                            <li><a href="{{url('/professor-profile')}}">Professor Profile</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Students</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/all-students')}}">All Students</a></li>
                            <li><a href="{{url('/add-student')}}">Add Students</a></li>
                            <li><a href="{{url('/edit-student')}}">Edit Students</a></li>
                            <li><a href="{{url('/about-student')}}">About Students</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Courses</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/all-courses')}}">All Courses</a></li>
                            <li><a href="{{url('/add-courses')}}">Add Courses</a></li>
                            <li><a href="{{url('/edit-courses')}}">Edit Courses</a></li>
                            <li><a href="{{url('/about-courses')}}">About Courses</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">Library</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/all-book')}}">All book</a></li>
                            <li><a href="{{url('/add-book')}}">Add book</a></li>
                            <li><a href="{{url('/edit-book')}}">Edit book</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-building"></i>
							<span class="nav-text">Departments</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/all-departments')}}">All Departments</a></li>
                            <li><a href="{{url('/add-departments')}}">Add Departments</a></li>
                            <li><a href="{{url('/edit-departments')}}">Edit Departments</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Staff</span>
						</a>
                        <ul aria-expanded="false">
                            
                            <li><a href="{{url('/all-staff')}}">All Staff</a></li>
                            <li><a href="{{url('/add-staff')}}">Add Staff</a></li>
                            <li><a href="{{url('/edit-staff')}}">Edit Staff</a></li>
                            <li><a href="{{url('/staff-profile')}}">Staff Profile</a></li>
                        </ul>
                    </li>
				
								
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{url('/email-compose')}}">Compose</a></li>
                                    <li><a href="{{url('/email-inbox')}}">Inbox</a></li>
                                    <li><a href="{{url('/email-read')}}">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/app-calender.html')}}">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{url('/ecom-product-grid')}}">Product Grid</a></li>
									<li><a href="{{url('/ecom-product-list')}}">Product List</a></li>
									<li><a href="{{url('/ecom-product-detail')}}">Product Details</a></li>
									<li><a href="{{url('/ecom-product-order')}}">Order</a></li>
									<li><a href="{{url('/ecom-checkout')}}">Checkout</a></li>
									<li><a href="{{url('/ecom-invoice')}}">Invoice</a></li>
									<li><a href="{{url('/ecom-customers')}}">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="la la-signal"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/chart-flot')}}">Flot</a></li>
                            <li><a href="{{url('/chart-morris')}}">Morris</a></li>
                            <li><a href="{{url('/chart-chartjs')}}">Chartjs</a></li>
                            <li><a href="{{url('/chart-chartist')}}">Chartist</a></li>
                            <li><a href="{{url('/chart-sparkline')}}">Sparkline</a></li>
                            <li><a href="{{url('/chart-peity')}}">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    
                    <li><a href="widget-basic.html" aria-expanded="false">
							<i class="la la-desktop"></i>
							<span class="nav-text">Widget</span>
						</a></li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-file-text"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/form-element')}}">Form Elements</a></li>
                            <li><a href="{{url('/form-wizard')}}">Wizard</a></li>
                            <li><a href="{{url('/form-editor-summernote')}}">Summernote</a></li>
                            <li><a href="f{{url('/orm-pickers')}}">Pickers</a></li>
                            <li><a href="{{url('/form-validation-jquery')}}">Jquery Validate</a></li>
                        </ul>
                    </li>
                    
                   
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
        <!--**********************************
            Content body start
        ***********************************-->