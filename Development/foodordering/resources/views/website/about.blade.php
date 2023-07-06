@extends('website.layout.main')
@section('midsection')
<!-- //banner -->
<!-- about-top -->
	<div class="agile-about-top">
		<div class="container">
		<h2 class="tittle-w3">About<span>Us</span></h2>
			<div class="about-section">
				<div class="col-md-7 ab-left">
				  <div class="grid">
			        <div class="h-f">
					<figure class="effect-jazz">
					<img src="{{url('website/images/s1.jpg')}}" alt="img25">
						<figcaption>
							<h4>Delicious <span>Food</span></h4>
							<p>Etiam quis quam auctor, cursus ipsum a, placerat dui.</p>
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="h-f">
					<figure class="effect-jazz">
						<img src="{{url('website/images/s2.jpg')}} "alt="img25">
						<figcaption>
							<h4>Delicious <span>Food</span></h4>
							<p>Etiam quis quam auctor, cursus ipsum a, placerat dui.</p>
							
						</figcaption>			
					</figure>
					
				 </div>
				 <div class="clearfix"> </div>
				 </div>
			   </div>
			   <div class="col-md-5 ab-text">
			        <h3 class="tittle-w3"><span>A brief history of </span>about us</h3>
					<p>Etiam quis quam auctor, cursus ipsum a, placerat dui. Aliquam erat volutpat. Donec bibendum viverra commodo. Morbi erat est, fringilla id sollicitudin sed, hendrerit nec est. Fusce maximus scelerisque turpis vel tempus
					<span>Morbi scelerisque a dolor vel feugiat. Nunc volutpat, magna in interdum commodo, magna orci venenatis risus, eu congue dolor ante quis eros.</span></p>
				</div>
				<div class="clearfix"> </div>
			 </div>
		</div>
	</div>
	<!-- //about-top -->
	<!--count-->
			<div class="count-agileits">
				<div id="particles-js"></div>
					
					<div class="count-grids">
					<h3 class="tittle-w3">Handling <span>your needs</span> with care</h3>
					<div class="count-bgcolor-w3ls">
						<div class="col-md-4 count-grid">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1052' data-delay='.5' data-increment="100">1052</div>
									<span></span>
									<h5>Products available</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-users" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
									<span></span>
									<h5>Clients come back</h5>
							</div>
						</div>
						<div class="col-md-4 count-grid">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='105209' data-delay='.5' data-increment="100">105209</div>
									<span></span>
									<h5>Site members</h5>
								</div>
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
			</div>
				<!--count-->
	<!--team-->
	<div class="team">
		<div class="container">
			<h3 class="tittle-w3"><span>Our </span>Chefs</h3>
			<div class="team-row">
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Thom<span>son</span></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="{{url('website/images/t1.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Mary <span>Doe</span></h5>
					<p>Consectetur adipi lorem ipsum dolor sit amet, est eligendi scing elit consectetur.</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="{{url('website/images/t2.jpg')}} "alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl1 wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Victo<span>ria</span></h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="{{url('website/images/t3.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Patrick <span>Pool</span></h5>
					<p>Eligendi scing elit lorem ipsum dolor sit amet, consectetur dolore magnam aliquam</p>
					<div class="social-bnr-agileits about-agile">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>					
						</ul>
					</div>
					<div class="team-img">
						<img src="{{url('website/images/t4.jpg')}}" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	

@endsection