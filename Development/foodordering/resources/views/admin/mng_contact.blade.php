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
				<h4 class="text-center">MANAGE CONTACT</h4>
			<div class="conatiner">
				<form action="">
					<input type="search" name="search" class="form-control" placeholder="enter search">
					<input type="submit" class="btn btn-danger">
					<a href="{{url('/mng_contact')}}"  class="btn btn-danger">RESET</a>
				</form>
			</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No of rows</th>
							<th>id</th>
							<th> Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>action</th>
						</tr>
					</thead>
					<tbody>
						@php
						$i=1;
						@endphp
						@foreach($contact as $d)
						<tr>
							<td>{{$i}}</td>
							<th scope="row">{{$d->id}}</th>
							<td>{{$d->Name}}</td>
							<td>{{$d->Email}}</td>
							<td>{{$d->Message}}</td>
							<td><a href="{{url('/mng_contact/'.$d->id)}}" class="btn btn-danger">DELETE</td>
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