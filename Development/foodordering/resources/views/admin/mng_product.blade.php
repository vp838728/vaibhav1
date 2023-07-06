@extends('admin.layout.main')
@section('midsection')
<!-- main content start-->
<div id="page-wrapper">
@if (Session::has('SUCESSS'))
						<div class="alert alert-success">
							
							<span>	{{ Session::get('SUCESSS') }}</sapn>
							
						</div>
						@endif
	<div class="main-page">
		<div class="tables">

			<div class="bs-example widget-shadow" data-example-id="bordered-table">
				<h4>Bordered Basic Table:</h4>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>NO OF ROWS</tH>
						    <th>id</th>
							<th>file</th>
							<th>name</th>
							<th>description</th>
							<th>price</th>
							<th>catid</th>
							<th>action</th>
							
						</tr>
					</thead>
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($data as $d)
						<tr>
							<td>{{$i}}</td>
							
							<td>{{$d->id}}</td>
							<td><img src="{{url('admin/upload/productimages/'.$d->file)}}" width="50px"height="50px"></td>
							<td>{{$d->name}}</td>
							<td>{{$d->description}}</td>
							<td>{{$d->price}}</td>
							<td>{{$d->cat_name}}</td>
<td>
							<a href="{{url('/mng_product/'.$d->id)}}" class="btn btn-danger">Delete</a>
							<a href="{{url('/editproduct/'.$d->id)}}" class="btn btn-warning">Edit</a>
</td>


						</tr>
						@php
						$i++;
						@endphp
						
						@endforeach   
										</tbody>
				</table>
			</div>


		</div>
	</div>
</div>
@endsection