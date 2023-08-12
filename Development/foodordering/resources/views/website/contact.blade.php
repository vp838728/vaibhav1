@extends('website.layout.main')
@section('midsection')
<!-- //banner -->
<!-- contact -->

<div class="mail">

	<div class="container">
		</BR>
		</BR>
		<h2 class="tittle-w3">CONTACT <span>US</span></h2>
		@if (Session::has('SUCESSS'))
		<div class="alert alert-success">

			<span>{{ Session::get('SUCESSS') }}</span>

		</div>
		@endif

		<div class="clearfix"></div>
	</div>

	<div class="col-md-12 mail-grid1-form ">
		<h3 class="tittle-w3"><span>Send a </span>Message</h3>

		<form action="{{url('/contact')}}" method="post">
			@csrf
			<input type="text" name="Name" placeholder="Name"value="{{old('Name')}}" />
			@error('Name')
			<div class="alert alert-danger">
				{{$message}}
			</div>
			@enderror
			<input type="email" name="Email" placeholder="Email" value="{{old('Email')}}"/>
			@error('Email')
			<div class="alert alert-danger">
				{{$message}}
			</div>
			@enderror

			<textarea name="Message" placeholder="Type Your Text Here...." >{{old('Message')}}</textarea>
			@error('Message')
			<div class="alert alert-danger">
				{{$message}}
			</div>
			@enderror

			<input type="submit" value="submit">
		</form>
	</div>
	<div class="clearfix"></div>
</div>
<div class="contact-btm-w3ls">
	<h3 class="tittle-w3"><span>Get in touch </span>with us</h3>
	<ul>
		<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
	</ul>

	<div class="clearfix"></div>
</div>
<!-- //contact -->
@endsection