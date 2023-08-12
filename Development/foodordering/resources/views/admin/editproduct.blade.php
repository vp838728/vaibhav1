@extends('admin.layout.main')
@section('midsection')
<!-- //header-ends -->
<!-- main content start-->
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<div class="form-grids row widget-shadow" data-example-id="basic-forms">
				<div class="form-title">
					<h4 class="text-center">EDIT PRODUCT:</h4>
				</div>
				<div class="form-groups">
					<form action="{{url('/updateproduct/'.$data->id)}}" method="post" enctype="multipart/form-data">
						<div class="form-group">
							
							</br>
							@csrf
							<label for="exampleInputEmail1"> NAME:</label>
							<input type="text" class="form-control" name="name"value="{{$data->name}}" id="exampleInputEmail1"
								placeholder="name">
						</div>
						<div class="form-group">
							
							<label for="exampleInputEmail1"> PRODUCT IMAGE:</label>
							<td><img src="{{url('admin/upload/productimages/'.$data->file)}}" width="50px"height="50px"></td>

							<input type="file" class="form-control" name="file" id="exampleInputEmail1"
								placeholder="catgory-image">
						</div>
						<div class="form-group">
							
							<label for="exampleInputEmail1"> PRODUCT DESCRIPTION:</label>
							<textarea name="description" class="form-control" placeholder="enter your product description">{{$data->description}}</textarea>
							
						</div>
						<div class="form-group">
							<select name="catid" class="form-control">
							<option> -- SELECT CATGORY--</OPTION>

								@if(!empty($categorie))
								@foreach($categorie as $d)
								@if($d->id== $data->catid)
								<OPTION value="{{$d->id}}"selected>{{$d->name}}</OPTION>
								@else
								<OPTION value="{{$d->id}}">{{$d->name}}</OPTION>
                                @endif
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