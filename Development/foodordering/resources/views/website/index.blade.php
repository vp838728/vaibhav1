@extends('website.layout.main')

@section('midsection')

<div class="banner-text">
@if (Session::has('SUCESSS'))
						<div class="alert alert-success">
							
								<span>{{ Session::get('SUCESSS') }}</span>
							
						</div>
						@endif
	<h2>FABULOUS FOOD AT AFFORDABLE PRICES!</h2>
	<div class="book-form">
		<p>Reserve a table.</p>
		<form action="{{url('/')}}" method="post">
			@csrf
			<div class="col-md-3 form-time-w3layouts">
				<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
				<input type="time" name="time">
				<input type="hidden" name="user_id"value="{{session()->get('userid')}}">
			</div>
			<div class="col-md-3 form-date-w3-agileits">
				<label><i class="fa fa-calendar" aria-hidden="true"></i> Date :</label>
				<input id="datepicker1"  type="date" value="mm/dd/yyyy" onfocus="this.value = '';"
					onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			<div class="col-md-3 form-left-agileits-w3layouts ">
				<label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
				<select class="form-control" name="people">
					<option></option>
					<option>1 Person</option>
					<option>2 People</option>
					<option>3 People</option>
					<option>4 People</option>
					<option>5 People</option>
					<option>More</option>
				</select>
			</div>
			<div class="col-md-3 form-left-agileits-submit">
				<input type="submit" value="Book a table">
			</div>
		</form>
	</div>
</div>
<!-- gallery -->
<div class="gallery-ban" id="gallery">
	<div class="container">
		<ul id="flexiselDemo1">
			<li>
				<div class="wthree_testimonials_grid_main">

					<img src="{{url('website/images/p1.jpg')}}" alt=" " class="img-responsive" />
				</div>
			</li>
			<li>
				<div class="wthree_testimonials_grid_main">

					<img src="{{url('website/images/p2.jpg')}}" alt=" " class="img-responsive" />
				</div>
			</li>
			<li>
				<div class="wthree_testimonials_grid_main">

					<img src="{{url('website/images/p3.jpg')}}" alt=" " class="img-responsive" />
				</div>
			</li>
			<li>
				<div class="wthree_testimonials_grid_main">

					<img src="{{url('website/images/p6.jpg')}}" alt=" " class="img-responsive" />
				</div>
			</li>
			<li>
				<div class="wthree_testimonials_grid_main">

					<img src="{{url('website/images/p4.jpg')}}" alt=" " class="img-responsive" />
				</div>
			</li>
			<li>
				<div class="wthree_testimonials_grid_main">

					<img src="{{url('website/images/p5.jpg')}}" alt=" " class="img-responsive" />
				</div>
			</li>
		</ul>

	</div>
</div>
<!-- //gallery -->
<!-- //banner -->
<div class="ab-w3l-about">
	<div class="container">
		<h3 class="tittle-w3"><span>Welcome to Our</span> Delish Food</h3>
		<p class="para-w3l">Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the
			1500s.Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellusMaecenas ac hendrerit
			purus. Lorem ipsum dolor sit amet.Lorem Ipsum is simply dummy text of the printing and typesetting industry
		<p><a class="read" href="single.html">Read More</a></p>
	</div>
</div>
<div class="about" id="about">
	<div class="col-md-6 ab-w3-agile-info">
		<div class="ab-w3-agile-info-text">
			<h3 class="tittle-w3">About<span> Us</span></h3>
			<p class="para-w3l">Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum
				velit.Lorem ipsum dolor sit amet.when an unknown printer took a galley of type and scrambled it to make
				a type specimen book.Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.when an unknown printer
				took Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet</p>
			<div class="about-read">
				<a href="single.html">Learn More</a>
			</div>
		</div>
		<div class="ab-w3-agile-inner">
			<div class="col-md-6 ab-w3-agile-part">
				<h4>Handling your needs with care</h4>
				<p class="para-w3l">Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum
					velit. a galley of type and scrambled it to make a type specimen book. Proin ultricies vestibulum
					velit.</p>
			</div>
			<div class="col-md-6 ab-w3-agile-part two">
				<h4>Best recipes with best ingredients</h4>
				<p class="para-w3l">Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum
					velit., a galley of type and scrambled it to make a type specimen book. Proin ultricies vestibulum
					velit.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-6 ab-w3-agile-img">

	</div>

	<div class="clearfix"></div>
</div>
<!--blogs-->
<div class="agile-blogs" id="blogs">
	<div class="container">
		<h3 class="tittle-w3"><span>Popular </span>Recipes</h3>
		<div class="g1 agile-blog1">
			<a href="#"><img src="{{url('website/images/bl1.jpg')}}" alt="blog1"></a>
			<div class="text-w3">
				<h3 class="tittle-w3 sub-head"><span>Roasted Heritage Carrot</span></h3>
				<p class="para-w3l">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation
					ullamco laboris nisi.Ut enim ad minim veniam.</p>

				<a class="read b1" href="single.html">Read More</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="g2 agile-blog2">
			<a href="#"><img src="{{url('website/images/bl2.jpg')}}" alt="blog1"></a>
			<div class="text-w3l">
				<h3 class="tittle-w3 sub-head"><span>Fritto Misto</span></h3>
				<p class="para-w3l">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation
					ullamco laboris nisi.Ut enim ad minim veniam.</p>
				<a class="read b2" href="single.html">Read More</a>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//blogs-->

<!--count-->
<div class="count-agileits">
	<div id="particles-js"></div>

	<div class="count-grids">
		<h3 class="tittle-w3">Handling <span>your needs</span> with care</h3>
		<div class="count-bgcolor-w3ls">
			<div class="col-md-4 count-grid">
				<i class="fa fa-cutlery" aria-hidden="true"></i>
				<div class="count hvr-bounce-to-bottom">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1052'
						data-delay='.5' data-increment="100">1052</div>
					<span></span>
					<h5>Products available</h5>
				</div>
			</div>
			<div class="col-md-4 count-grid">
				<i class="fa fa-users" aria-hidden="true"></i>
				<div class="count hvr-bounce-to-bottom">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372'
						data-delay='.5' data-increment="100">372</div>
					<span></span>
					<h5>Clients come back</h5>
				</div>
			</div>
			<div class="col-md-4 count-grid">
				<i class="fa fa-user-plus" aria-hidden="true"></i>
				<div class="count hvr-bounce-to-bottom">
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='105209'
						data-delay='.5' data-increment="100">105209</div>
					<span></span>
					<h5>Site members</h5>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--count-->
<!--services-section-->
<div class="services-w3layouts" id="services">
	<!-- //Stats -->
	<div class="col-md-6 agitsworkw3ls-grid ">
		<h3 class="tittle-w3"><span>Always</span> fresh <span>& </span>delicious <span>food</span></h3>
		<p class="para-w3l">Gourmet is a full-service catering and event planning company dedicated to providing you
			with exquisite cuisine and fantastic customer service. We offer a variety of menus and design options, for
			everything from box lunches to full-service plated dinners.</p>
		<div class="services-left-w3-agile">
			<h3 class="tittle-w3 sub-head"><span>Our </span>Menu</h3>
			<ul>
				<li><i class="fa fa-check" aria-hidden="true"></i>BEVERAGES</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>BREAKFASTS</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>LUNCH BUFFETS</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>DINNER BUFFETS</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>PARTY TRAYS</li>
			</ul>
		</div>
		<div class="services-right-w3-agile">
			<h3 class="tittle-w3 sub-head"><span>Catering</span> for</h3>
			<ul>
				<li><i class="fa fa-check" aria-hidden="true"></i>GRADUATION PARTY</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>WEDDING PARTY</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>BRIDAL SHOWER</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>BIRTHDAY PARTY</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>ANNIVERSARY</li>
			</ul>
		</div>
	</div>

	<div class="col-md-6 agitsworkw3ls-grid-2">
		<div class="info-imgs">
			<ul>
				<li>
					<div class="gallery-grid1">
						<a href="single.html"><img src="{{url('website/images/s1.jpg')}}" alt=" "
								class="img-responsive"></a>
						<div class="p-mask">
							<h4><span>D</span>elish <span>F</span>ood</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="gallery-grid1">
						<a href="single.html"><img src="{{url('website/images/s2.jpg')}}" alt=" "
								class="img-responsive"></a>
						<div class="p-mask">
							<h4><span>D</span>elish <span>F</span>ood</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="gallery-grid1">
						<a href="single.html"><img src="{{url('website/images/s3.jpg')}}" alt=" "
								class="img-responsive"></a>
						<div class="p-mask">
							<h4><span>D</span>elish <span>F</span>ood</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="gallery-grid1">
						<a href="single.html"><img src="{{url('website/images/s4.jpg')}}" alt=" "
								class="img-responsive"></a>
						<div class="p-mask">
							<h4><span>D</span>elish <span>F</span>ood</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum.</p>
						</div>
					</div>
				</li>
			</ul>
		</div>

	</div>
	<div class="clearfix"></div>
	<!-- //Stats -->
	<div class="clearfix"></div>
</div>
<!--//services-section-->

<!-- mail -->
<div class="mail">
	<div class="mail-grid1">
		<div class="container">
			<h3 class="tittle-w3">Contact <span>Info</span></h3>
			<div class="col-md-4 mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Phone</p><span>+1 (100)222-23-33</span>
				</div>
			</div>
			<div class="col-md-4 mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Email</p><a href="mailto:info@example.com">info@example.com</a>
				</div>
			</div>
			<div class="col-md-4 mail-agileits-w3layouts">
				<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
				<div class="contact-right">
					<p>Address</p><span>7784 Diamonds street, California, US.</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="col-md-7 map ">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1452332634941"></iframe>
	</div>
	<div class="col-md-5 mail-grid1-form ">
		<h3 class="tittle-w3"><span>Send a </span>Message</h3>
		<form action="#" method="post">
			<input type="text" name="Name" placeholder="Name" required="" />
			<input type="email" name="Email" placeholder="Email" required="" />
			<textarea name="Message" placeholder="Type Your Text Here...." required=""></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //mail -->

<!-- //Footer -->

@endsection