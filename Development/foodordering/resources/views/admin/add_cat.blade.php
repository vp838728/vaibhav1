@extends('admin.layout.main')
@section('midsection')
<!-- //header-ends -->
<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4 class="text-center">ADD CATEGORY :</h4>
				</div>
				@if (Session::has('SUCESSS'))
						<div class="alert alert-success">
							
								<span>{{ Session::get('SUCESSS') }}</span>
							
						</div>
						@endif
				<div class="form-groups">
					<form  action="{{url('/add_cat')}}" method="post">
						

						<div class="form-group my-3">
							<br>
							@csrf
							<label for="exampleInputEmail1">CATEGORY NAME:</label>
							<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="enter category name">
						</div>
						
					
						
						<input type="submit" name="submit" class="btn btn-primary">
					</form>
				</div>
			</div>




		</div>
	</div>
</div>
@endsection