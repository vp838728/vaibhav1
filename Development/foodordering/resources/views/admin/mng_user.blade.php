@extends('admin.layout.main')
@section('midsection')
<!-- main content start-->
<div id="page-wrapper">
	@if (Session::has('SUCESSS'))
	<div class="alert alert-success">

		<span> {{ Session::get('SUCESSS') }}</sapn>

	</div>
	@elseif(Session::has('fail'))
	<div class="alert alert-danger">

		<span> {{ Session::get('fail') }}</sapn>

	</div>
	@endif
	<div class="main-page">
		<div class="tables">

			<div class="bs-example widget-shadow" data-example-id="bordered-table">
				<h4>Bordered Basic Table:</h4>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No of Rows</th>
							<th>id</th>
							<th>file</th>
							<th>name</th>
							<th>Username</th>
							<th>gen</th>
							<th>lag</th>
							<th>cid</th>
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
							<td><img src="{{url('website/upload/customer/'.$d->file)}}" width="50px" height="50px"></td>
							<td>{{$d->name}}</td>
							<td>{{$d->username}}</td>
							<td>{{$d->gen}}</td>
							<td>{{$d->lag}}</td>
							<td>{{$d->name}}</td>
							<td>
							<a href="{{url('/mng_user/'.$d->id)}}" class="btn btn-danger">Delete</a>
							<a href="{{url('/view_user/'.$d->id)}}" class="btn btn-danger">View</a>

							<a href="{{url('/satus_user/'.$d->id)}}" class="btn btn-warning">{{$d->status}}</a>
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