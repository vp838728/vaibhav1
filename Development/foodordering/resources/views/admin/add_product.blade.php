@extends('admin.layout.main')
@section('midsection')
<!-- //header-ends -->
<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4 class="text-center">ADD PRODUCT:</h4>
				</div>
				@if (Session::has('SUCESSS'))
						<div class="alert alert-success">
							
								<span>{{ Session::get('SUCESSS') }}</span>
							
						</div>
						@endif
				<div class="form-groups">
					<form action="{{url('/add_product')}}"method="post" enctype="multipart/form-data">
						<div class="form-group">
							
							</br>
							@csrf
							<label for="exampleInputEmail1"> NAME:</label>
							<input type="text" class="form-control" name="name" id="exampleInputEmail1"
								placeholder="Email">
						</div>
						<div class="form-group">
							
							<label for="exampleInputEmail1"> PRODUCT IMAGE:</label>
							<input type="file" class="form-control" name="file" id="exampleInputEmail1"
								placeholder="Email">
						</div>
						<div class="form-group">
							
							<label for="exampleInputEmail1"> PRODUCT Price:</label>
							<input type="number" class="form-control" name="price" id="exampleInputEmail1"
								placeholder="Email">
						</div>
						<div class="form-group">
							
							<label for="exampleInputEmail1"> PRODUCT DESCRIPTION:</label>
							<textarea name="description" class="form-control" placeholder="enter your product description"></textarea>
							
						</div>
						
						<div class="form-group">
							<select name="catid" class="form-control">
							<option> -- SELECT CATGORY--</OPTION>

								@if(!empty($data))
								@foreach($data as $d)
								<OPTION value="{{$d->id}}">{{$d->name}}</OPTION>
								@endforeach
								@endif
</select>
						</div>
					

						<button type="submit"  name="submit"class="btn btn-default">Submit</button>

					</form>
				</div>
			</div>




		</div>
	</div>
</div>
@endsection