@extends('admin.layout.main')
@section('midsection')
<!-- //header-ends -->
<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4 class="text-center">Edit EMPLOYEE:</h4>
				</div>
				@if (Session::has('SUCESSS'))
						<div class="alert alert-success">
							
								<span>{{ Session::get('SUCESSS') }}</span>
							
						</div>
						@endif
				<div class="form-groups">
					<form action="{{url('/update_emp/'.$data->id)}}"method="post"enctype="multipart/form-data">
						<div class="form-group">
							
							</br>
							@csrf
							<label for="exampleInputEmail1"> NAME:</label>
							<input type="text" class="form-control" name="name" value="{{$data->name}}" id="exampleInputEmail1"
								placeholder="Email">
						</div>
						<div class="form-group">
						
						<label for="exampleInputEmail1"> Mobile:</label>
						<input type="text" class="form-control" name="mobile"value="{{$data->mobile}}" id="exampleInputEmail1"
							placeholder="Email">
					</div>
					<div class="form-group">
							<label for="exampleInputPassword1">EMAIL</label>
							<input type="email" class="form-control" name="email" value="{{$data->email}}"id="exampleInputPassword1"
								placeholder="Password">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1"> ADDRESS:</label>
                         <textarea name="address" placeholder="enter your address" class="form-control">{{$data->address}}</textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1"> USERNAME:</label>
							<input type="text" class="form-control" name="username" value="{{$data->username}}"id="exampleInputEmail1"
								placeholder="Email">
						</div>
			

						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<td><img src="{{url('admin/upload/employee/'.$data->file)}}" width="50px"height="50px"></td>

							<input type="file" name="file"id="exampleInputFile">
						</div>

						<button type="submit" class="btn btn-default">Submit</button>

					</form>
				</div>
			</div>




		</div>
	</div>
</div>
@endsection