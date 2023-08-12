@extends('website.layout.main')
@section('midsection')
<!-- //banner -->
 </br>
 <h2 class="text-center">Food Menu</h2>
@foreach($data as $d) 
<div class=" col-md-4">

	<!-- <div class="product-list">
		<div class="product-card">
			<img src="{{url('admin/upload/productimages/'.$d->file)}}" alt="Product Image">
			<h3>Product Title</h3>
			<p>Description of the product goes here.</p>
			<span>$19.99</span>
		</div>
	</div> -->
	<div class="product-list">
  <div class="product-card">
    <!-- <img src="product-image.jpg" alt="Product Image"> -->
	<img src="{{url('admin/upload/productimages/'.$d->file)}}" alt="Product Image" height="200px" width="200px">

    <h3>{{$d->name}}</h3>
    <p>{{$d->Description}}</p>
    <span>$99.99</span>
	<!-- <a href="#" class="btn btn-primary">Add to cart</a> -->
	<a href="{{url('/productlist')}}" class="btn btn-info">View catgory type</a>

  </div>
</div>


</div>
@endforeach

<!-- //gallery -->
@endsection